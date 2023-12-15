<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CheckPointStructBody extends Model
{
    /**
     * @var string
     */
    public $errorCount;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $lastError;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'errorCount' => 'ErrorCount',
        'height'     => 'Height',
        'index'      => 'Index',
        'lastError'  => 'LastError',
        'totalCount' => 'TotalCount',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->lastError) {
            $res['LastError'] = $this->lastError;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckPointStructBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['LastError'])) {
            $model->lastError = $map['LastError'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
