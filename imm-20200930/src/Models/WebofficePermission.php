<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class WebofficePermission extends Model
{
    /**
     * @var bool
     */
    public $copy;

    /**
     * @var bool
     */
    public $export;

    /**
     * @var bool
     */
    public $history;

    /**
     * @var bool
     */
    public $print;

    /**
     * @var bool
     */
    public $readonly;

    /**
     * @var bool
     */
    public $rename;
    protected $_name = [
        'copy'     => 'Copy',
        'export'   => 'Export',
        'history'  => 'History',
        'print'    => 'Print',
        'readonly' => 'Readonly',
        'rename'   => 'Rename',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copy) {
            $res['Copy'] = $this->copy;
        }
        if (null !== $this->export) {
            $res['Export'] = $this->export;
        }
        if (null !== $this->history) {
            $res['History'] = $this->history;
        }
        if (null !== $this->print) {
            $res['Print'] = $this->print;
        }
        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
        }
        if (null !== $this->rename) {
            $res['Rename'] = $this->rename;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebofficePermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Copy'])) {
            $model->copy = $map['Copy'];
        }
        if (isset($map['Export'])) {
            $model->export = $map['Export'];
        }
        if (isset($map['History'])) {
            $model->history = $map['History'];
        }
        if (isset($map['Print'])) {
            $model->print = $map['Print'];
        }
        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }
        if (isset($map['Rename'])) {
            $model->rename = $map['Rename'];
        }

        return $model;
    }
}
