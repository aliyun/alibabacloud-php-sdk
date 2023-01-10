<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PathConfig extends Model
{
    /**
     * @example f1
     *
     * @var string
     */
    public $functionName;

    /**
     * @var string[]
     */
    public $methods;

    /**
     * @example /login
     *
     * @var string
     */
    public $path;

    /**
     * @example prod
     *
     * @var string
     */
    public $qualifier;

    /**
     * @example s1
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'functionName' => 'functionName',
        'methods'      => 'methods',
        'path'         => 'path',
        'qualifier'    => 'qualifier',
        'serviceName'  => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->methods) {
            $res['methods'] = $this->methods;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PathConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = $map['methods'];
            }
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
