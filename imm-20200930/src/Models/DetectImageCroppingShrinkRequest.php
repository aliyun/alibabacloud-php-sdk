<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectImageCroppingShrinkRequest extends Model
{
    /**
     * @description The cropping ratios. You can specify up to five cropping ratios. Take note of the following requirements:
     *
     *   The ratio must be an integer between 0 and 20.
     *   The ratio must range from 0.5 to 2.
     *   If you leave this parameter empty, the default processing logic is `["auto"]`.
     *
     * The ratio is beyond the range of 0.5 to 2.
     * @example ["1:1"]
     *
     * @var string
     */
    public $aspectRatios;

    /**
     * @description **If you do not have special requirements, leave this parameter empty.**
     *
     * The authorization chain. This parameter is optional. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @description The name of the project.
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The URI of the Object Storage Service (OSS) bucket in which you store the image.
     *
     * Specify the value in the oss://${Bucket}/${Object} format. `${Bucket}` specifies the name of the OSS bucket that resides in the same region as the current project. `${Object}` specifies the complete path to the image file that has an extension.
     * @example oss://imm-test/testcases/facetest.jpg
     *
     * @var string
     */
    public $sourceURI;
    protected $_name = [
        'aspectRatios'           => 'AspectRatios',
        'credentialConfigShrink' => 'CredentialConfig',
        'projectName'            => 'ProjectName',
        'sourceURI'              => 'SourceURI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aspectRatios) {
            $res['AspectRatios'] = $this->aspectRatios;
        }
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageCroppingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AspectRatios'])) {
            $model->aspectRatios = $map['AspectRatios'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        return $model;
    }
}
