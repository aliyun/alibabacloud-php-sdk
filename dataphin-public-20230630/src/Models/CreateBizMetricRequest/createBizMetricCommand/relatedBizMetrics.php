<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizMetricRequest\createBizMetricCommand;

use AlibabaCloud\Dara\Model;

class relatedBizMetrics extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $relationType;
    protected $_name = [
        'name' => 'Name',
        'relationType' => 'RelationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        return $model;
    }
}
