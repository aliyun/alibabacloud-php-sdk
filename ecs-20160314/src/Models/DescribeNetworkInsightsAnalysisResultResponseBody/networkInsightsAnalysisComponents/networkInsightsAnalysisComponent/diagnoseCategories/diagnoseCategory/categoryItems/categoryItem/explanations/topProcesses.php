<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem\explanations;

use AlibabaCloud\Tea\Model;

class topProcesses extends Model
{
    /**
     * @var string[]
     */
    public $topProcess;
    protected $_name = [
        'topProcess' => 'TopProcess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topProcess) {
            $res['TopProcess'] = $this->topProcess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topProcesses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopProcess'])) {
            if (!empty($map['TopProcess'])) {
                $model->topProcess = $map['TopProcess'];
            }
        }

        return $model;
    }
}
