<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddEditingProjectMaterialsRequest extends Model
{
    /**
     * @description The material ID. Separate multiple material IDs with commas (,). Each type supports up to 10 material IDs. The following material types are supported:
     *
     *   video
     *   audio
     *   image
     *   liveStream
     *   editingProject
     *
     * This parameter is required.
     * @example {"video":"*****2e057304fcd9b145c5cafc*****", "image":"****8021a8d493da643c8acd98*****,*****cb6307a4edea614d8b3f3c*****", "liveStream": "[{\\"appName\\":\\"testrecord\\",\\"domainName\\":\\"test.alivecdn.com\\",\\"liveUrl\\":\\"rtmp://test.alivecdn.com/testrecord/teststream\\",\\"streamName\\":\\"teststream\\"}]", "editingProject": "*****9b145c5cafc2e057304fcd*****"}
     *
     * @var string
     */
    public $materialMaps;

    /**
     * @description The ID of the online editing project.
     *
     * This parameter is required.
     * @example *****b2101cb318c*****
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'materialMaps' => 'MaterialMaps',
        'projectId'    => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialMaps) {
            $res['MaterialMaps'] = $this->materialMaps;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEditingProjectMaterialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialMaps'])) {
            $model->materialMaps = $map['MaterialMaps'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
