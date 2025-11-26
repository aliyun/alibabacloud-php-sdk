<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ListScriptRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $refIdsJson;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $statesJson;

    /**
     * @var string
     */
    public $uuidsJson;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'refIdsJson' => 'RefIdsJson',
        'scriptId' => 'ScriptId',
        'search' => 'Search',
        'statesJson' => 'StatesJson',
        'uuidsJson' => 'UuidsJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->refIdsJson) {
            $res['RefIdsJson'] = $this->refIdsJson;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RefIdsJson'])) {
            $model->refIdsJson = $map['RefIdsJson'];
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
