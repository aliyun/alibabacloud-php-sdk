<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;

use AlibabaCloud\Tea\Model;

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
        'name'     => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contacts) {
            $res['Contacts'] = $this->contacts;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = $map['Contacts'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
