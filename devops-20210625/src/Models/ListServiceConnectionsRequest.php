<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListServiceConnectionsRequest extends Model
{
    /**
     * @description aliyun_code  阿里云代码 Codeup       Codeup  Gitee        码云 github       Github ack       容器服务Kubernetes(ACK) docker_register_aliyun    容器镜像服务(ACR) ecs          对象存储(OSS) edas          企业级分布式应用(EDAS) emas         移动研发平台(EMAS) fc            阿里云函数计算(FC) kubernetes     自建k8s集群 oss            对象存储(OSS) PACKAGES       制品仓库 ros   资源编排服务(ROS) sae       Serverless应用引擎(SAE)
     *
     * @var string
     */
    public $sericeConnectionType;
    protected $_name = [
        'sericeConnectionType' => 'sericeConnectionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sericeConnectionType) {
            $res['sericeConnectionType'] = $this->sericeConnectionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sericeConnectionType'])) {
            $model->sericeConnectionType = $map['sericeConnectionType'];
        }

        return $model;
    }
}
