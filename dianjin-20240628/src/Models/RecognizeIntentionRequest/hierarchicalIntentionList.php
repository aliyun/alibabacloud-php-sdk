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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest;

use AlibabaCloud\Tea\Model;

class hierarchicalIntentionList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $intention;

    /**
     * @example 1810929291010150400
     *
     * @var string
     */
    public $intentionCode;

    /**
     * @var string
     */
    public $intentionScript;
    protected $_name = [
        'description' => 'description',
        'intention' => 'intention',
        'intentionCode' => 'intentionCode',
        'intentionScript' => 'intentionScript',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->intention) {
            $res['intention'] = $this->intention;
        }
        if (null !== $this->intentionCode) {
            $res['intentionCode'] = $this->intentionCode;
        }
        if (null !== $this->intentionScript) {
            $res['intentionScript'] = $this->intentionScript;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hierarchicalIntentionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['intention'])) {
            $model->intention = $map['intention'];
        }
        if (isset($map['intentionCode'])) {
            $model->intentionCode = $map['intentionCode'];
        }
        if (isset($map['intentionScript'])) {
            $model->intentionScript = $map['intentionScript'];
        }

        return $model;
    }
}
