<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelRequest;

use AlibabaCloud\Dara\Model;

class taskTelList extends Model
{
    /**
     * @var string
     */
    public $backupTels;

    /**
     * @var string
     */
    public $clid;

    /**
     * @var string
     */
    public $clidGroup;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $tel;
    protected $_name = [
        'backupTels' => 'BackupTels',
        'clid' => 'Clid',
        'clidGroup' => 'ClidGroup',
        'priority' => 'Priority',
        'property' => 'Property',
        'tel' => 'Tel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupTels) {
            $res['BackupTels'] = $this->backupTels;
        }

        if (null !== $this->clid) {
            $res['Clid'] = $this->clid;
        }

        if (null !== $this->clidGroup) {
            $res['ClidGroup'] = $this->clidGroup;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        if (null !== $this->tel) {
            $res['Tel'] = $this->tel;
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
        if (isset($map['BackupTels'])) {
            $model->backupTels = $map['BackupTels'];
        }

        if (isset($map['Clid'])) {
            $model->clid = $map['Clid'];
        }

        if (isset($map['ClidGroup'])) {
            $model->clidGroup = $map['ClidGroup'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        if (isset($map['Tel'])) {
            $model->tel = $map['Tel'];
        }

        return $model;
    }
}
