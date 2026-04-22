<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeIntranetUserCanAnalysisVpcsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeIntranetUserCanAnalysisVpcsResponseBody\userCanAnalysisVpcsPopResults\userCanAnalysisVpcsPopResult;

class userCanAnalysisVpcsPopResults extends Model
{
    /**
     * @var userCanAnalysisVpcsPopResult[]
     */
    public $userCanAnalysisVpcsPopResult;
    protected $_name = [
        'userCanAnalysisVpcsPopResult' => 'UserCanAnalysisVpcsPopResult',
    ];

    public function validate()
    {
        if (\is_array($this->userCanAnalysisVpcsPopResult)) {
            Model::validateArray($this->userCanAnalysisVpcsPopResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userCanAnalysisVpcsPopResult) {
            if (\is_array($this->userCanAnalysisVpcsPopResult)) {
                $res['UserCanAnalysisVpcsPopResult'] = [];
                $n1 = 0;
                foreach ($this->userCanAnalysisVpcsPopResult as $item1) {
                    $res['UserCanAnalysisVpcsPopResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['UserCanAnalysisVpcsPopResult'])) {
            if (!empty($map['UserCanAnalysisVpcsPopResult'])) {
                $model->userCanAnalysisVpcsPopResult = [];
                $n1 = 0;
                foreach ($map['UserCanAnalysisVpcsPopResult'] as $item1) {
                    $model->userCanAnalysisVpcsPopResult[$n1] = userCanAnalysisVpcsPopResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
