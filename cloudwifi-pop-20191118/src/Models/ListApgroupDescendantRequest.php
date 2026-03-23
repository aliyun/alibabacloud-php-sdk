<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class ListApgroupDescendantRequest extends Model
{
    /**
     * @var int
     */
    public $apgroupId;

    /**
     * @var string
     */
    public $apgroupUuid;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $cursor;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'apgroupId' => 'ApgroupId',
        'apgroupUuid' => 'ApgroupUuid',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'cursor' => 'Cursor',
        'level' => 'Level',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apgroupId) {
            $res['ApgroupId'] = $this->apgroupId;
        }

        if (null !== $this->apgroupUuid) {
            $res['ApgroupUuid'] = $this->apgroupUuid;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ApgroupId'])) {
            $model->apgroupId = $map['ApgroupId'];
        }

        if (isset($map['ApgroupUuid'])) {
            $model->apgroupUuid = $map['ApgroupUuid'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
