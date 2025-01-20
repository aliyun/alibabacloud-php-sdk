<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow\autoRefresh;

use AlibabaCloud\Dara\Model;

class autoRefresh extends Model
{
    /**
     * @var string
     */
    public $refreshPath;
    protected $_name = [
        'refreshPath' => 'RefreshPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refreshPath) {
            $res['RefreshPath'] = $this->refreshPath;
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
        if (isset($map['RefreshPath'])) {
            $model->refreshPath = $map['RefreshPath'];
        }

        return $model;
    }
}
