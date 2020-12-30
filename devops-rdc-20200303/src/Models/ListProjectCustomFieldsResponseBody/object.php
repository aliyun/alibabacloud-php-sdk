<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListProjectCustomFieldsResponseBody;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListProjectCustomFieldsResponseBody\object\values;
use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $subtype;

    /**
     * @var values[]
     */
    public $values;

    /**
     * @var string
     */
    public $customFieldId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'type'          => 'Type',
        'subtype'       => 'Subtype',
        'values'        => 'Values',
        'customFieldId' => 'CustomFieldId',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->subtype) {
            $res['Subtype'] = $this->subtype;
        }
        if (null !== $this->values) {
            $res['Values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['Values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customFieldId) {
            $res['CustomFieldId'] = $this->customFieldId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Subtype'])) {
            $model->subtype = $map['Subtype'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n             = 0;
                foreach ($map['Values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomFieldId'])) {
            $model->customFieldId = $map['CustomFieldId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
