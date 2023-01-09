<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsSceneResponseBody\sceneViewList;
use AlibabaCloud\Tea\Model;

class ListPtsSceneResponseBody extends Model
{
    /**
     * @example 4001
     *
     * @var string
     */
    public $code;

    /**
     * @example 400
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @example DD6F2ED8-E31B-497F-85AB-C4E358A5F667
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sceneViewList[]
     */
    public $sceneViewList;

    /**
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'sceneViewList'  => 'SceneViewList',
        'success'        => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneViewList) {
            $res['SceneViewList'] = [];
            if (null !== $this->sceneViewList && \is_array($this->sceneViewList)) {
                $n = 0;
                foreach ($this->sceneViewList as $item) {
                    $res['SceneViewList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPtsSceneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneViewList'])) {
            if (!empty($map['SceneViewList'])) {
                $model->sceneViewList = [];
                $n                    = 0;
                foreach ($map['SceneViewList'] as $item) {
                    $model->sceneViewList[$n++] = null !== $item ? sceneViewList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
