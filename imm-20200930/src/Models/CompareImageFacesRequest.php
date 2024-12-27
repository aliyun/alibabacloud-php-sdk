<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CompareImageFacesRequest\source;
use AlibabaCloud\Tea\Model;

class CompareImageFacesRequest extends Model
{
    /**
     * @description **If you have no special requirements, leave this parameter empty.**
     *
     * The configurations of authorization chains. This parameter is optional. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The URLs of the two images for compression.
     *
     * @var source
     */
    public $source;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'projectName'      => 'ProjectName',
        'source'           => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareImageFacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        return $model;
    }
}
