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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1705388704855
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example 1813ceee-7fe5-41b4-87e5-982a4d18cca5
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'expiredTime' => 'ExpiredTime',
        'token' => 'Token',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
