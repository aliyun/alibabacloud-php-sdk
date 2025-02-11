<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclEntriesResponseBody;

use AlibabaCloud\Dara\Model;

class aclEntries extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $entry;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'entry'       => 'Entry',
        'status'      => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
