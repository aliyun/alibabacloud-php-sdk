<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDatabaseExtensionsResponseBody;

use AlibabaCloud\Dara\Model;

class extensions extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extensionName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'extensionName' => 'ExtensionName',
        'status' => 'Status',
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

        if (null !== $this->extensionName) {
            $res['ExtensionName'] = $this->extensionName;
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

        if (isset($map['ExtensionName'])) {
            $model->extensionName = $map['ExtensionName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
