<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortScriptsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $scriptName;
    protected $_name = [
        'type'       => 'type',
        'scope'      => 'scope',
        'createTime' => 'createTime',
        'status'     => 'status',
        'modifyTime' => 'modifyTime',
        'scriptName' => 'scriptName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }
        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }
        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }

        return $model;
    }
}
