<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class QuerySearchIndexResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The state of the index. Valid values:
     *
     *   active: the index is enabled.
     *   Deactive: the index is not enabled.
     *
     * @example Active
     *
     * @var string
     */
    public $indexStatus;

    /**
     * @description The category of the index. Valid values:
     *
     *   mm: large visual model.
     *   face: face recognition.
     *   aiLabel: smart tagging.
     *
     * @example mm
     *
     * @var string
     */
    public $indexType;

    /**
     * @description The total number of media assets.
     *
     * @example 12
     *
     * @var string
     */
    public $mediaTotal;

    /**
     * @description The ID of the request.
     *
     * @example 4E84BE44-58A7-****-****-FBEBEA16EF94
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the search library.
     *
     * @example test1
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return QuerySearchIndexResponseBody
     */
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
