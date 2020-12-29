<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\metricParam\dimensions;
use AlibabaCloud\Tea\Model;

class metricParam extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $appGroupId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var dimensions[]
     */
    public $dimensions;
    protected $_name = [
        'type'       => 'Type',
        'appGroupId' => 'AppGroupId',
        'appId'      => 'AppId',
        'pid'        => 'Pid',
        'dimensions' => 'Dimensions',
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
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
