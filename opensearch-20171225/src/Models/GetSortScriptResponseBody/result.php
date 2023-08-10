<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the script was created.
     *
     * @example 2020-04-02 20:21:14
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the script was last modified.
     *
     * @example 2020-04-02 21:21:14
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The sort phase to which the script applies.
     *
     * @example second_rank
     *
     * @var string
     */
    public $scope;

    /**
     * @description The status of the script. For more information, see the Script status table.
     *
     * @example released
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the script.
     *
     * @example cava_script
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'createTime',
        'modifyTime' => 'modifyTime',
        'scope'      => 'scope',
        'status'     => 'status',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
