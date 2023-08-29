<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class DescribeBootResponseBody extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $whiteListAffiliation;

    /**
     * @var string
     */
    public $whiteListDetail;
    protected $_name = [
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'id'                   => 'Id',
        'requestId'            => 'RequestId',
        'whiteListAffiliation' => 'WhiteListAffiliation',
        'whiteListDetail'      => 'WhiteListDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->whiteListAffiliation) {
            $res['WhiteListAffiliation'] = $this->whiteListAffiliation;
        }
        if (null !== $this->whiteListDetail) {
            $res['WhiteListDetail'] = $this->whiteListDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBootResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WhiteListAffiliation'])) {
            $model->whiteListAffiliation = $map['WhiteListAffiliation'];
        }
        if (isset($map['WhiteListDetail'])) {
            $model->whiteListDetail = $map['WhiteListDetail'];
        }

        return $model;
    }
}
