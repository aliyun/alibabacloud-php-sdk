<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\postInstallScripts\postInstallScriptInfo;

class postInstallScripts extends Model
{
    /**
     * @var postInstallScriptInfo[]
     */
    public $postInstallScriptInfo;
    protected $_name = [
        'postInstallScriptInfo' => 'PostInstallScriptInfo',
    ];

    public function validate()
    {
        if (\is_array($this->postInstallScriptInfo)) {
            Model::validateArray($this->postInstallScriptInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postInstallScriptInfo) {
            if (\is_array($this->postInstallScriptInfo)) {
                $res['PostInstallScriptInfo'] = [];
                $n1 = 0;
                foreach ($this->postInstallScriptInfo as $item1) {
                    $res['PostInstallScriptInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PostInstallScriptInfo'])) {
            if (!empty($map['PostInstallScriptInfo'])) {
                $model->postInstallScriptInfo = [];
                $n1 = 0;
                foreach ($map['PostInstallScriptInfo'] as $item1) {
                    $model->postInstallScriptInfo[$n1++] = postInstallScriptInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
