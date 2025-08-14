<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryVideoCognitionJobRequest;

use AlibabaCloud\Dara\Model;

class includeResults extends Model
{
    /**
     * @var bool
     */
    public $needAsr;

    /**
     * @var bool
     */
    public $needOcr;

    /**
     * @var bool
     */
    public $needProcess;
    protected $_name = [
        'needAsr' => 'NeedAsr',
        'needOcr' => 'NeedOcr',
        'needProcess' => 'NeedProcess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needAsr) {
            $res['NeedAsr'] = $this->needAsr;
        }

        if (null !== $this->needOcr) {
            $res['NeedOcr'] = $this->needOcr;
        }

        if (null !== $this->needProcess) {
            $res['NeedProcess'] = $this->needProcess;
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
        if (isset($map['NeedAsr'])) {
            $model->needAsr = $map['NeedAsr'];
        }

        if (isset($map['NeedOcr'])) {
            $model->needOcr = $map['NeedOcr'];
        }

        if (isset($map['NeedProcess'])) {
            $model->needProcess = $map['NeedProcess'];
        }

        return $model;
    }
}
