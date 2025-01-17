<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class QuerySearchIndexResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $indexStatus;
    /**
     * @var string
     */
    public $indexType;
    /**
     * @var string
     */
    public $mediaTotal;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $searchLibName;
    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'code'          => 'Code',
        'indexStatus'   => 'IndexStatus',
        'indexType'     => 'IndexType',
        'mediaTotal'    => 'MediaTotal',
        'requestId'     => 'RequestId',
        'searchLibName' => 'SearchLibName',
        'success'       => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->indexStatus) {
            $res['IndexStatus'] = $this->indexStatus;
        }

        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }

        if (null !== $this->mediaTotal) {
            $res['MediaTotal'] = $this->mediaTotal;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IndexStatus'])) {
            $model->indexStatus = $map['IndexStatus'];
        }

        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }

        if (isset($map['MediaTotal'])) {
            $model->mediaTotal = $map['MediaTotal'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
