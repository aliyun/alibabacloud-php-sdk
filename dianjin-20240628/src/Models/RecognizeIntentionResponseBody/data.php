<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $analysisProcess;

    /**
     * @example 1
     *
     * @var string
     */
    public $intentionCode;

    /**
     * @var string
     */
    public $intentionName;

    /**
     * @var string
     */
    public $recommendIntention;

    /**
     * @var string
     */
    public $recommendScript;
    protected $_name = [
        'analysisProcess'    => 'analysisProcess',
        'intentionCode'      => 'intentionCode',
        'intentionName'      => 'intentionName',
        'recommendIntention' => 'recommendIntention',
        'recommendScript'    => 'recommendScript',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisProcess) {
            $res['analysisProcess'] = $this->analysisProcess;
        }
        if (null !== $this->intentionCode) {
            $res['intentionCode'] = $this->intentionCode;
        }
        if (null !== $this->intentionName) {
            $res['intentionName'] = $this->intentionName;
        }
        if (null !== $this->recommendIntention) {
            $res['recommendIntention'] = $this->recommendIntention;
        }
        if (null !== $this->recommendScript) {
            $res['recommendScript'] = $this->recommendScript;
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
        if (isset($map['analysisProcess'])) {
            $model->analysisProcess = $map['analysisProcess'];
        }
        if (isset($map['intentionCode'])) {
            $model->intentionCode = $map['intentionCode'];
        }
        if (isset($map['intentionName'])) {
            $model->intentionName = $map['intentionName'];
        }
        if (isset($map['recommendIntention'])) {
            $model->recommendIntention = $map['recommendIntention'];
        }
        if (isset($map['recommendScript'])) {
            $model->recommendScript = $map['recommendScript'];
        }

        return $model;
    }
}
