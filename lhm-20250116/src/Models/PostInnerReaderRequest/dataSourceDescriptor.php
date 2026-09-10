<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\PostInnerReaderRequest;

use AlibabaCloud\Dara\Model;

class dataSourceDescriptor extends Model
{
    /**
     * @var string
     */
    public $dsName;
    protected $_name = [
        'dsName' => 'dsName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dsName) {
            $res['dsName'] = $this->dsName;
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
        if (isset($map['dsName'])) {
            $model->dsName = $map['dsName'];
        }

        return $model;
    }
}
