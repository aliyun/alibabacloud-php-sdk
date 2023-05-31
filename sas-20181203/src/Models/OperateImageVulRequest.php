<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateImageVulRequest extends Model
{
    /**
     * @description The information about the vulnerability. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   namespace: the namespace of the image
     *   repoName: the name of the Container Registry repository
     *   regionId: the region ID
     *   instanceId: the ID of the Container Registry instance
     *   repoId: the name of the repository
     *   tag: the tad added to the image
     *   digest: the digest of the image
     *   newTag: the tag added to the image after the vulnerability is fixed
     *   uuid: the UUID of the image
     *   ids: the IDs of the vulnerability primary keys
     *
     * @example [{\"namespace\":\"cloud_oa****\",\"repoName\":\"hybirdc****\",\"regionId\":\"cn-shanghai\",\"instanceId\":\"cri-rv4nvbv8iju4****\",\"repoId\":\"crr-2q7302qrofxg****\",\"tag\":\"hybird-cloud-web_fix_167115945****\",\"digest\":\"e1a4fd25884ca2ef8840bb252c9926e4f549df9e046500dd93539b2d458c****\",\"newTag\":\"hybird-cloud-web_fix_167115996****\",\"uuid\":\"4ad91dd8c0c02de6574fa98085d0****\",\"ids\":[197540864,197540865,197540869]}]
     *
     * @var string
     */
    public $info;

    /**
     * @description If you want to fix the vulnerability, set the value to vul_fix.
     *
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The type of the vulnerability. Set the value to cve.
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'info'        => 'Info',
        'operateType' => 'OperateType',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateImageVulRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
