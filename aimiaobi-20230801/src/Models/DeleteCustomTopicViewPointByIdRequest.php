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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomTopicViewPointByIdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example dfd73894e6a94fd79fe7ffbe865796fb
     *
     * @var string
     */
    public $customViewPointId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'customViewPointId' => 'CustomViewPointId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->customViewPointId) {
            $res['CustomViewPointId'] = $this->customViewPointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomTopicViewPointByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CustomViewPointId'])) {
            $model->customViewPointId = $map['CustomViewPointId'];
        }

        return $model;
    }
}
