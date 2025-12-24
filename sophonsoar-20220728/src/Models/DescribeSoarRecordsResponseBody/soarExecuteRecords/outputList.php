<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody\soarExecuteRecords;

use AlibabaCloud\Dara\Model;

class outputList extends Model
{
    /**
     * @var string
     */
    public $actionUuid;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'actionUuid' => 'ActionUuid',
        'content' => 'Content',
        'nodeName' => 'NodeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionUuid) {
            $res['ActionUuid'] = $this->actionUuid;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['ActionUuid'])) {
            $model->actionUuid = $map['ActionUuid'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
