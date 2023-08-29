<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class GenerateAikcertRequest extends Model
{
    /**
     * @var string
     */
    public $aikName;

    /**
     * @var string
     */
    public $aikPub;

    /**
     * @var string
     */
    public $ekCert;

    /**
     * @var string
     */
    public $ekPub;

    /**
     * @var string
     */
    public $nonceDigest;

    /**
     * @var string
     */
    public $propertyUuid;
    protected $_name = [
        'aikName'      => 'AikName',
        'aikPub'       => 'AikPub',
        'ekCert'       => 'EkCert',
        'ekPub'        => 'EkPub',
        'nonceDigest'  => 'NonceDigest',
        'propertyUuid' => 'PropertyUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aikName) {
            $res['AikName'] = $this->aikName;
        }
        if (null !== $this->aikPub) {
            $res['AikPub'] = $this->aikPub;
        }
        if (null !== $this->ekCert) {
            $res['EkCert'] = $this->ekCert;
        }
        if (null !== $this->ekPub) {
            $res['EkPub'] = $this->ekPub;
        }
        if (null !== $this->nonceDigest) {
            $res['NonceDigest'] = $this->nonceDigest;
        }
        if (null !== $this->propertyUuid) {
            $res['PropertyUuid'] = $this->propertyUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAikcertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AikName'])) {
            $model->aikName = $map['AikName'];
        }
        if (isset($map['AikPub'])) {
            $model->aikPub = $map['AikPub'];
        }
        if (isset($map['EkCert'])) {
            $model->ekCert = $map['EkCert'];
        }
        if (isset($map['EkPub'])) {
            $model->ekPub = $map['EkPub'];
        }
        if (isset($map['NonceDigest'])) {
            $model->nonceDigest = $map['NonceDigest'];
        }
        if (isset($map['PropertyUuid'])) {
            $model->propertyUuid = $map['PropertyUuid'];
        }

        return $model;
    }
}
