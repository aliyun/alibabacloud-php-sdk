<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSetRequest;

use AlibabaCloud\Dara\Model;

class ipWhitelistRecognizers extends Model
{
    /**
     * @var string
     */
    public $autoRecognizeStatus;

    /**
     * @var string
     */
    public $ipWhitelistRecognizerType;

    /**
     * @var string
     */
    public $recognizeScope;
    protected $_name = [
        'autoRecognizeStatus' => 'AutoRecognizeStatus',
        'ipWhitelistRecognizerType' => 'IpWhitelistRecognizerType',
        'recognizeScope' => 'RecognizeScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRecognizeStatus) {
            $res['AutoRecognizeStatus'] = $this->autoRecognizeStatus;
        }

        if (null !== $this->ipWhitelistRecognizerType) {
            $res['IpWhitelistRecognizerType'] = $this->ipWhitelistRecognizerType;
        }

        if (null !== $this->recognizeScope) {
            $res['RecognizeScope'] = $this->recognizeScope;
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
        if (isset($map['AutoRecognizeStatus'])) {
            $model->autoRecognizeStatus = $map['AutoRecognizeStatus'];
        }

        if (isset($map['IpWhitelistRecognizerType'])) {
            $model->ipWhitelistRecognizerType = $map['IpWhitelistRecognizerType'];
        }

        if (isset($map['RecognizeScope'])) {
            $model->recognizeScope = $map['RecognizeScope'];
        }

        return $model;
    }
}
