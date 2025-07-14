<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListScriptsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example bdd49242-114c-4045-b1d1-25ccc1756c75
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nluEngine;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scriptName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nluEngine' => 'NluEngine',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'scriptName' => 'ScriptName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nluEngine) {
            $res['NluEngine'] = $this->nluEngine;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NluEngine'])) {
            $model->nluEngine = $map['NluEngine'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }

        return $model;
    }
}
