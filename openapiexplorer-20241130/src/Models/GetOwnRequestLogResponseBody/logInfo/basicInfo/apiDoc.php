<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody\logInfo\basicInfo;

use AlibabaCloud\Dara\Model;

class apiDoc extends Model
{
    /**
     * @var string
     */
    public $alibabacloudSite;

    /**
     * @var string
     */
    public $aliyunSite;
    protected $_name = [
        'alibabacloudSite' => 'alibabacloudSite',
        'aliyunSite' => 'aliyunSite',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alibabacloudSite) {
            $res['alibabacloudSite'] = $this->alibabacloudSite;
        }

        if (null !== $this->aliyunSite) {
            $res['aliyunSite'] = $this->aliyunSite;
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
        if (isset($map['alibabacloudSite'])) {
            $model->alibabacloudSite = $map['alibabacloudSite'];
        }

        if (isset($map['aliyunSite'])) {
            $model->aliyunSite = $map['aliyunSite'];
        }

        return $model;
    }
}
