<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskContentV2Request extends Model
{
    /**
     * @example { "dbId":12****, "sql":"select * from test_table",   "dbType":"lindorm_sql"  }
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @example 449***
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'nodeContent' => 'NodeContent',
        'nodeId' => 'NodeId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskContentV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
