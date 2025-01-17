<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCanTrySasResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $canTry;
    /**
     * @var int[]
     */
    public $canTryVersions;
    /**
     * @var int
     */
    public $tryType;
    protected $_name = [
        'canTry'         => 'CanTry',
        'canTryVersions' => 'CanTryVersions',
        'tryType'        => 'TryType',
    ];

    public function validate()
    {
        if (\is_array($this->canTryVersions)) {
            Model::validateArray($this->canTryVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canTry) {
            $res['CanTry'] = $this->canTry;
        }

        if (null !== $this->canTryVersions) {
            if (\is_array($this->canTryVersions)) {
                $res['CanTryVersions'] = [];
                $n1                    = 0;
                foreach ($this->canTryVersions as $item1) {
                    $res['CanTryVersions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tryType) {
            $res['TryType'] = $this->tryType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanTry'])) {
            $model->canTry = $map['CanTry'];
        }

        if (isset($map['CanTryVersions'])) {
            if (!empty($map['CanTryVersions'])) {
                $model->canTryVersions = [];
                $n1                    = 0;
                foreach ($map['CanTryVersions'] as $item1) {
                    $model->canTryVersions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TryType'])) {
            $model->tryType = $map['TryType'];
        }

        return $model;
    }
}
