<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordLibsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $keywordCount;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;

    /**
     * @var string
     */
    public $serviceCodes;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'gmtModified' => 'GmtModified',
        'keywordCount' => 'KeywordCount',
        'libId' => 'LibId',
        'libName' => 'LibName',
        'serviceCodes' => 'ServiceCodes',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->keywordCount) {
            $res['KeywordCount'] = $this->keywordCount;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
        }

        if (null !== $this->serviceCodes) {
            $res['ServiceCodes'] = $this->serviceCodes;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['KeywordCount'])) {
            $model->keywordCount = $map['KeywordCount'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        if (isset($map['ServiceCodes'])) {
            $model->serviceCodes = $map['ServiceCodes'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
