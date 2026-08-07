<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteSemanticJobResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $archivedJobName;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jobName;
    protected $_name = [
        'archivedJobName' => 'ArchivedJobName',
        'deleted' => 'Deleted',
        'id' => 'Id',
        'jobName' => 'JobName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archivedJobName) {
            $res['ArchivedJobName'] = $this->archivedJobName;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
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
        if (isset($map['ArchivedJobName'])) {
            $model->archivedJobName = $map['ArchivedJobName'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        return $model;
    }
}
