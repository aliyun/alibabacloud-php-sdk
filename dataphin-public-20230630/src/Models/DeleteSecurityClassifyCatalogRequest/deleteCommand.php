<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteSecurityClassifyCatalogRequest;

use AlibabaCloud\Dara\Model;

class deleteCommand extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $returnRemovedDetails;
    protected $_name = [
        'path' => 'Path',
        'returnRemovedDetails' => 'ReturnRemovedDetails',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->returnRemovedDetails) {
            $res['ReturnRemovedDetails'] = $this->returnRemovedDetails;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['ReturnRemovedDetails'])) {
            $model->returnRemovedDetails = $map['ReturnRemovedDetails'];
        }

        return $model;
    }
}
