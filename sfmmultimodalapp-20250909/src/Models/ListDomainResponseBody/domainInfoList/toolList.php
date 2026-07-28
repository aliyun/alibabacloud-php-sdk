<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListDomainResponseBody\domainInfoList;

use AlibabaCloud\Dara\Model;

class toolList extends Model
{
    /**
     * @var string
     */
    public $toolCode;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'toolCode' => 'ToolCode',
        'toolName' => 'ToolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->toolCode) {
            $res['ToolCode'] = $this->toolCode;
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
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
        if (isset($map['ToolCode'])) {
            $model->toolCode = $map['ToolCode'];
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        return $model;
    }
}
