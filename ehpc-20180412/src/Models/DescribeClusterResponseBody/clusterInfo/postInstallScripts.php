<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\postInstallScripts\postInstallScriptInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postInstallScriptInfo) {
            $res['PostInstallScriptInfo'] = [];
            if (null !== $this->postInstallScriptInfo && \is_array($this->postInstallScriptInfo)) {
                $n = 0;
                foreach ($this->postInstallScriptInfo as $item) {
                    $res['PostInstallScriptInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return postInstallScripts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostInstallScriptInfo'])) {
            if (!empty($map['PostInstallScriptInfo'])) {
                $model->postInstallScriptInfo = [];
                $n                            = 0;
                foreach ($map['PostInstallScriptInfo'] as $item) {
                    $model->postInstallScriptInfo[$n++] = null !== $item ? postInstallScriptInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
