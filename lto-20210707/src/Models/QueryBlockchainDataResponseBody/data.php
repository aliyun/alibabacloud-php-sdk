<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\QueryBlockchainDataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $algType;

    /**
     * @var string
     */
    public $plainData;

    /**
     * @var string
     */
    public $privacyData;

    /**
     * @var string
     */
    public $privacyRuleId;
    protected $_name = [
        'algType' => 'AlgType',
        'plainData' => 'PlainData',
        'privacyData' => 'PrivacyData',
        'privacyRuleId' => 'PrivacyRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algType) {
            $res['AlgType'] = $this->algType;
        }

        if (null !== $this->plainData) {
            $res['PlainData'] = $this->plainData;
        }

        if (null !== $this->privacyData) {
            $res['PrivacyData'] = $this->privacyData;
        }

        if (null !== $this->privacyRuleId) {
            $res['PrivacyRuleId'] = $this->privacyRuleId;
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
        if (isset($map['AlgType'])) {
            $model->algType = $map['AlgType'];
        }

        if (isset($map['PlainData'])) {
            $model->plainData = $map['PlainData'];
        }

        if (isset($map['PrivacyData'])) {
            $model->privacyData = $map['PrivacyData'];
        }

        if (isset($map['PrivacyRuleId'])) {
            $model->privacyRuleId = $map['PrivacyRuleId'];
        }

        return $model;
    }
}
