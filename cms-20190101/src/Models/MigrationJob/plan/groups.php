<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;

use AlibabaCloud\Dara\Model;

class groups extends Model
{
    /**
     * @var string[]
     */
    public $contacts;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'contacts' => 'Contacts',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['Contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['Contacts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['Contacts'] as $item1) {
                    $model->contacts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
