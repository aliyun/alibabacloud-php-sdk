<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\complianceList\rules;
use AlibabaCloud\Tea\Model;

class complianceList extends Model
{
    /**
     * @var string
     */
    public $resourceCode;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'resourceCode' => 'ResourceCode',
        'resourceName' => 'ResourceName',
        'rules' => 'Rules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
