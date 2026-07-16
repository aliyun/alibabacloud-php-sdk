<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs;

use AlibabaCloud\Dara\Model;

class sitePause extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $paused;

    /**
     * @var string
     */
    public $sequence;
    protected $_name = [
        'configId' => 'ConfigId',
        'paused' => 'Paused',
        'sequence' => 'Sequence',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
