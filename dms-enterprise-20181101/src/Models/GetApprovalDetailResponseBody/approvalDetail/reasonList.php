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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail;

use AlibabaCloud\Tea\Model;

class reasonList extends Model
{
    /**
     * @var string[]
     */
    public $reasons;
    protected $_name = [
        'reasons' => 'Reasons',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->reasons) {
            $res['Reasons'] = $this->reasons;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reasonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reasons'])) {
            if (!empty($map['Reasons'])) {
                $model->reasons = $map['Reasons'];
            }
        }

        return $model;
    }
}
