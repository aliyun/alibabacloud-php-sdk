<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListScriptRecordingRequest extends Model
{
    /**
     * @example c209abb3-6804-4a75-b2c7-dd55c8c61b6a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example d004cfd2-6a81-491c-83c6-cbe186620c95
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $search;

    /**
     * @example [
     * ]
     * @var string
     */
    public $statesJson;

    /**
     * @example ["d17d5bfa-4972-4389-9718-f9602edabe48"]
     *
     * @var string
     */
    public $uuidsJson;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'scriptId'   => 'ScriptId',
        'search'     => 'Search',
        'statesJson' => 'StatesJson',
        'uuidsJson'  => 'UuidsJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->statesJson) {
            $res['StatesJson'] = $this->statesJson;
        }
        if (null !== $this->uuidsJson) {
            $res['UuidsJson'] = $this->uuidsJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScriptRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['StatesJson'])) {
            $model->statesJson = $map['StatesJson'];
        }
        if (isset($map['UuidsJson'])) {
            $model->uuidsJson = $map['UuidsJson'];
        }

        return $model;
    }
}
