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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo;

use AlibabaCloud\Tea\Model;

class relatedUserNickList extends Model
{
    /**
     * @var string[]
     */
    public $userNicks;
    protected $_name = [
        'userNicks' => 'UserNicks',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userNicks) {
            $res['UserNicks'] = $this->userNicks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedUserNickList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserNicks'])) {
            if (!empty($map['UserNicks'])) {
                $model->userNicks = $map['UserNicks'];
            }
        }

        return $model;
    }
}
