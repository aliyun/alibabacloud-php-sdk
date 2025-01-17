<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyLogMetaStatusRequest extends Model
{
    /**
     * @var string
     */
    public $from;
    /**
     * @var string
     */
    public $logStore;
    /**
     * @var string
     */
    public $project;
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'from'                       => 'From',
        'logStore'                   => 'LogStore',
        'project'                    => 'Project',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'status'                     => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
