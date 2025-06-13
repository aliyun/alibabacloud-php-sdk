<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ProcessGroup extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processGroupId;

    /**
     * @var ProcessItem[]
     */
    public $processes;
    protected $_name = [
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'name' => 'Name',
        'processGroupId' => 'ProcessGroupId',
        'processes' => 'Processes',
    ];

    public function validate()
    {
        if (\is_array($this->processes)) {
            Model::validateArray($this->processes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->processGroupId) {
            $res['ProcessGroupId'] = $this->processGroupId;
        }

        if (null !== $this->processes) {
            if (\is_array($this->processes)) {
                $res['Processes'] = [];
                $n1 = 0;
                foreach ($this->processes as $item1) {
                    $res['Processes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProcessGroupId'])) {
            $model->processGroupId = $map['ProcessGroupId'];
        }

        if (isset($map['Processes'])) {
            if (!empty($map['Processes'])) {
                $model->processes = [];
                $n1 = 0;
                foreach ($map['Processes'] as $item1) {
                    $model->processes[$n1] = ProcessItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
