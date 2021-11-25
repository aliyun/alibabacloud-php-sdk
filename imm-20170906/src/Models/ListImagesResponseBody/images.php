<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\address;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\croppingSuggestion;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\faces;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\imageQuality;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\OCR;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\tags;
use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @var address
     */
    public $address;

    /**
     * @var string
     */
    public $addressFailReason;

    /**
     * @var string
     */
    public $addressModifyTime;

    /**
     * @var string
     */
    public $addressStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var croppingSuggestion[]
     */
    public $croppingSuggestion;

    /**
     * @var string
     */
    public $croppingSuggestionFailReason;

    /**
     * @var string
     */
    public $croppingSuggestionModifyTime;

    /**
     * @var string
     */
    public $croppingSuggestionStatus;

    /**
     * @var string
     */
    public $exif;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var faces[]
     */
    public $faces;

    /**
     * @var string
     */
    public $facesFailReason;

    /**
     * @var string
     */
    public $facesModifyTime;

    /**
     * @var string
     */
    public $facesStatus;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $imageFormat;

    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var imageQuality
     */
    public $imageQuality;

    /**
     * @var string
     */
    public $imageQualityFailReason;

    /**
     * @var string
     */
    public $imageQualityModifyTime;

    /**
     * @var string
     */
    public $imageQualityStatus;

    /**
     * @var string
     */
    public $imageTime;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var int
     */
    public $imageWidth;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var OCR[]
     */
    public $OCR;

    /**
     * @var string
     */
    public $OCRFailReason;

    /**
     * @var string
     */
    public $OCRModifyTime;

    /**
     * @var string
     */
    public $OCRStatus;

    /**
     * @var string
     */
    public $orientation;

    /**
     * @var string
     */
    public $remarksA;

    /**
     * @var string
     */
    public $remarksArrayA;

    /**
     * @var string
     */
    public $remarksArrayB;

    /**
     * @var string
     */
    public $remarksB;

    /**
     * @var string
     */
    public $remarksC;

    /**
     * @var string
     */
    public $remarksD;

    /**
     * @var string
     */
    public $sourcePosition;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceUri;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tagsFailReason;

    /**
     * @var string
     */
    public $tagsModifyTime;

    /**
     * @var string
     */
    public $tagsStatus;
    protected $_name = [
        'address'                      => 'Address',
        'addressFailReason'            => 'AddressFailReason',
        'addressModifyTime'            => 'AddressModifyTime',
        'addressStatus'                => 'AddressStatus',
        'createTime'                   => 'CreateTime',
        'croppingSuggestion'           => 'CroppingSuggestion',
        'croppingSuggestionFailReason' => 'CroppingSuggestionFailReason',
        'croppingSuggestionModifyTime' => 'CroppingSuggestionModifyTime',
        'croppingSuggestionStatus'     => 'CroppingSuggestionStatus',
        'exif'                         => 'Exif',
        'externalId'                   => 'ExternalId',
        'faces'                        => 'Faces',
        'facesFailReason'              => 'FacesFailReason',
        'facesModifyTime'              => 'FacesModifyTime',
        'facesStatus'                  => 'FacesStatus',
        'fileSize'                     => 'FileSize',
        'imageFormat'                  => 'ImageFormat',
        'imageHeight'                  => 'ImageHeight',
        'imageQuality'                 => 'ImageQuality',
        'imageQualityFailReason'       => 'ImageQualityFailReason',
        'imageQualityModifyTime'       => 'ImageQualityModifyTime',
        'imageQualityStatus'           => 'ImageQualityStatus',
        'imageTime'                    => 'ImageTime',
        'imageUri'                     => 'ImageUri',
        'imageWidth'                   => 'ImageWidth',
        'location'                     => 'Location',
        'modifyTime'                   => 'ModifyTime',
        'OCR'                          => 'OCR',
        'OCRFailReason'                => 'OCRFailReason',
        'OCRModifyTime'                => 'OCRModifyTime',
        'OCRStatus'                    => 'OCRStatus',
        'orientation'                  => 'Orientation',
        'remarksA'                     => 'RemarksA',
        'remarksArrayA'                => 'RemarksArrayA',
        'remarksArrayB'                => 'RemarksArrayB',
        'remarksB'                     => 'RemarksB',
        'remarksC'                     => 'RemarksC',
        'remarksD'                     => 'RemarksD',
        'sourcePosition'               => 'SourcePosition',
        'sourceType'                   => 'SourceType',
        'sourceUri'                    => 'SourceUri',
        'tags'                         => 'Tags',
        'tagsFailReason'               => 'TagsFailReason',
        'tagsModifyTime'               => 'TagsModifyTime',
        'tagsStatus'                   => 'TagsStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->addressFailReason) {
            $res['AddressFailReason'] = $this->addressFailReason;
        }
        if (null !== $this->addressModifyTime) {
            $res['AddressModifyTime'] = $this->addressModifyTime;
        }
        if (null !== $this->addressStatus) {
            $res['AddressStatus'] = $this->addressStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->croppingSuggestion) {
            $res['CroppingSuggestion'] = [];
            if (null !== $this->croppingSuggestion && \is_array($this->croppingSuggestion)) {
                $n = 0;
                foreach ($this->croppingSuggestion as $item) {
                    $res['CroppingSuggestion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->croppingSuggestionFailReason) {
            $res['CroppingSuggestionFailReason'] = $this->croppingSuggestionFailReason;
        }
        if (null !== $this->croppingSuggestionModifyTime) {
            $res['CroppingSuggestionModifyTime'] = $this->croppingSuggestionModifyTime;
        }
        if (null !== $this->croppingSuggestionStatus) {
            $res['CroppingSuggestionStatus'] = $this->croppingSuggestionStatus;
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->faces) {
            $res['Faces'] = [];
            if (null !== $this->faces && \is_array($this->faces)) {
                $n = 0;
                foreach ($this->faces as $item) {
                    $res['Faces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->facesFailReason) {
            $res['FacesFailReason'] = $this->facesFailReason;
        }
        if (null !== $this->facesModifyTime) {
            $res['FacesModifyTime'] = $this->facesModifyTime;
        }
        if (null !== $this->facesStatus) {
            $res['FacesStatus'] = $this->facesStatus;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->imageFormat) {
            $res['ImageFormat'] = $this->imageFormat;
        }
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = null !== $this->imageQuality ? $this->imageQuality->toMap() : null;
        }
        if (null !== $this->imageQualityFailReason) {
            $res['ImageQualityFailReason'] = $this->imageQualityFailReason;
        }
        if (null !== $this->imageQualityModifyTime) {
            $res['ImageQualityModifyTime'] = $this->imageQualityModifyTime;
        }
        if (null !== $this->imageQualityStatus) {
            $res['ImageQualityStatus'] = $this->imageQualityStatus;
        }
        if (null !== $this->imageTime) {
            $res['ImageTime'] = $this->imageTime;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->OCR) {
            $res['OCR'] = [];
            if (null !== $this->OCR && \is_array($this->OCR)) {
                $n = 0;
                foreach ($this->OCR as $item) {
                    $res['OCR'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->OCRFailReason) {
            $res['OCRFailReason'] = $this->OCRFailReason;
        }
        if (null !== $this->OCRModifyTime) {
            $res['OCRModifyTime'] = $this->OCRModifyTime;
        }
        if (null !== $this->OCRStatus) {
            $res['OCRStatus'] = $this->OCRStatus;
        }
        if (null !== $this->orientation) {
            $res['Orientation'] = $this->orientation;
        }
        if (null !== $this->remarksA) {
            $res['RemarksA'] = $this->remarksA;
        }
        if (null !== $this->remarksArrayA) {
            $res['RemarksArrayA'] = $this->remarksArrayA;
        }
        if (null !== $this->remarksArrayB) {
            $res['RemarksArrayB'] = $this->remarksArrayB;
        }
        if (null !== $this->remarksB) {
            $res['RemarksB'] = $this->remarksB;
        }
        if (null !== $this->remarksC) {
            $res['RemarksC'] = $this->remarksC;
        }
        if (null !== $this->remarksD) {
            $res['RemarksD'] = $this->remarksD;
        }
        if (null !== $this->sourcePosition) {
            $res['SourcePosition'] = $this->sourcePosition;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tagsFailReason) {
            $res['TagsFailReason'] = $this->tagsFailReason;
        }
        if (null !== $this->tagsModifyTime) {
            $res['TagsModifyTime'] = $this->tagsModifyTime;
        }
        if (null !== $this->tagsStatus) {
            $res['TagsStatus'] = $this->tagsStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = address::fromMap($map['Address']);
        }
        if (isset($map['AddressFailReason'])) {
            $model->addressFailReason = $map['AddressFailReason'];
        }
        if (isset($map['AddressModifyTime'])) {
            $model->addressModifyTime = $map['AddressModifyTime'];
        }
        if (isset($map['AddressStatus'])) {
            $model->addressStatus = $map['AddressStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CroppingSuggestion'])) {
            if (!empty($map['CroppingSuggestion'])) {
                $model->croppingSuggestion = [];
                $n                         = 0;
                foreach ($map['CroppingSuggestion'] as $item) {
                    $model->croppingSuggestion[$n++] = null !== $item ? croppingSuggestion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CroppingSuggestionFailReason'])) {
            $model->croppingSuggestionFailReason = $map['CroppingSuggestionFailReason'];
        }
        if (isset($map['CroppingSuggestionModifyTime'])) {
            $model->croppingSuggestionModifyTime = $map['CroppingSuggestionModifyTime'];
        }
        if (isset($map['CroppingSuggestionStatus'])) {
            $model->croppingSuggestionStatus = $map['CroppingSuggestionStatus'];
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? faces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FacesFailReason'])) {
            $model->facesFailReason = $map['FacesFailReason'];
        }
        if (isset($map['FacesModifyTime'])) {
            $model->facesModifyTime = $map['FacesModifyTime'];
        }
        if (isset($map['FacesStatus'])) {
            $model->facesStatus = $map['FacesStatus'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['ImageFormat'])) {
            $model->imageFormat = $map['ImageFormat'];
        }
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = imageQuality::fromMap($map['ImageQuality']);
        }
        if (isset($map['ImageQualityFailReason'])) {
            $model->imageQualityFailReason = $map['ImageQualityFailReason'];
        }
        if (isset($map['ImageQualityModifyTime'])) {
            $model->imageQualityModifyTime = $map['ImageQualityModifyTime'];
        }
        if (isset($map['ImageQualityStatus'])) {
            $model->imageQualityStatus = $map['ImageQualityStatus'];
        }
        if (isset($map['ImageTime'])) {
            $model->imageTime = $map['ImageTime'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OCR'])) {
            if (!empty($map['OCR'])) {
                $model->OCR = [];
                $n          = 0;
                foreach ($map['OCR'] as $item) {
                    $model->OCR[$n++] = null !== $item ? OCR::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OCRFailReason'])) {
            $model->OCRFailReason = $map['OCRFailReason'];
        }
        if (isset($map['OCRModifyTime'])) {
            $model->OCRModifyTime = $map['OCRModifyTime'];
        }
        if (isset($map['OCRStatus'])) {
            $model->OCRStatus = $map['OCRStatus'];
        }
        if (isset($map['Orientation'])) {
            $model->orientation = $map['Orientation'];
        }
        if (isset($map['RemarksA'])) {
            $model->remarksA = $map['RemarksA'];
        }
        if (isset($map['RemarksArrayA'])) {
            $model->remarksArrayA = $map['RemarksArrayA'];
        }
        if (isset($map['RemarksArrayB'])) {
            $model->remarksArrayB = $map['RemarksArrayB'];
        }
        if (isset($map['RemarksB'])) {
            $model->remarksB = $map['RemarksB'];
        }
        if (isset($map['RemarksC'])) {
            $model->remarksC = $map['RemarksC'];
        }
        if (isset($map['RemarksD'])) {
            $model->remarksD = $map['RemarksD'];
        }
        if (isset($map['SourcePosition'])) {
            $model->sourcePosition = $map['SourcePosition'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TagsFailReason'])) {
            $model->tagsFailReason = $map['TagsFailReason'];
        }
        if (isset($map['TagsModifyTime'])) {
            $model->tagsModifyTime = $map['TagsModifyTime'];
        }
        if (isset($map['TagsStatus'])) {
            $model->tagsStatus = $map['TagsStatus'];
        }

        return $model;
    }
}
