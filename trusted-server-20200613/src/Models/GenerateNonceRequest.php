<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class GenerateNonceRequest extends Model
{
    /**
     * @var string
     */
    public $aikName;

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
    public $propertyUuid;
    protected $_name = [
        'aikName'      => 'AikName',
        'ekCert'       => 'EkCert',
        'ekPub'        => 'EkPub',
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
        if (null !== $this->ekCert) {
            $res['EkCert'] = $this->ekCert;
        }
        if (null !== $this->ekPub) {
            $res['EkPub'] = $this->ekPub;
        }
        if (null !== $this->propertyUuid) {
            $res['PropertyUuid'] = $this->propertyUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateNonceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AikName'])) {
            $model->aikName = $map['AikName'];
        }
        if (isset($map['EkCert'])) {
            $model->ekCert = $map['EkCert'];
        }
        if (isset($map['EkPub'])) {
            $model->ekPub = $map['EkPub'];
        }
        if (isset($map['PropertyUuid'])) {
            $model->propertyUuid = $map['PropertyUuid'];
        }

        return $model;
    }
}
