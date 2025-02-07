<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CheckSiteNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isSubSite;
    /**
     * @var string
     */
    public $messeage;
    /**
     * @var bool
     */
    public $passed;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'description' => 'Description',
        'isSubSite'   => 'IsSubSite',
        'messeage'    => 'Messeage',
        'passed'      => 'Passed',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isSubSite) {
            $res['IsSubSite'] = $this->isSubSite;
        }

        if (null !== $this->messeage) {
            $res['Messeage'] = $this->messeage;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsSubSite'])) {
            $model->isSubSite = $map['IsSubSite'];
        }

        if (isset($map['Messeage'])) {
            $model->messeage = $map['Messeage'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
