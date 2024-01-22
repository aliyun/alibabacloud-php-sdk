<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class File extends Model
{
    /**
     * @var string
     */
    public $accessControlAllowOrigin;

    /**
     * @var string
     */
    public $accessControlRequestMethod;

    /**
     * @var Address[]
     */
    public $addresses;

    /**
     * @var string
     */
    public $album;

    /**
     * @var string
     */
    public $albumArtist;

    /**
     * @var string
     */
    public $artist;

    /**
     * @var Image[]
     */
    public $audioCovers;

    /**
     * @var AudioStream[]
     */
    public $audioStreams;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $cacheControl;

    /**
     * @var string
     */
    public $composer;

    /**
     * @var string
     */
    public $contentDisposition;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string
     */
    public $contentLanguage;

    /**
     * @var string
     */
    public $contentMd5;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var CroppingSuggestion[]
     */
    public $croppingSuggestions;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $ETag;

    /**
     * @var string
     */
    public $EXIF;

    /**
     * @var Element[]
     */
    public $elements;

    /**
     * @var int
     */
    public $figureCount;

    /**
     * @var Figure[]
     */
    public $figures;

    /**
     * @var string
     */
    public $fileAccessTime;

    /**
     * @var string
     */
    public $fileCreateTime;

    /**
     * @var string
     */
    public $fileHash;

    /**
     * @var string
     */
    public $fileModifiedTime;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $formatLongName;

    /**
     * @var string
     */
    public $formatName;

    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var ImageScore
     */
    public $imageScore;

    /**
     * @var int
     */
    public $imageWidth;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $latLong;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var OCRContents[]
     */
    public $OCRContents;

    /**
     * @var string
     */
    public $OCRTexts;

    /**
     * @var string
     */
    public $OSSCRC64;

    /**
     * @var string
     */
    public $OSSDeleteMarker;

    /**
     * @var string
     */
    public $OSSExpiration;

    /**
     * @var string
     */
    public $OSSObjectType;

    /**
     * @var string
     */
    public $OSSStorageClass;

    /**
     * @var mixed[]
     */
    public $OSSTagging;

    /**
     * @var int
     */
    public $OSSTaggingCount;

    /**
     * @var string
     */
    public $OSSURI;

    /**
     * @var mixed[]
     */
    public $OSSUserMeta;

    /**
     * @var string
     */
    public $OSSVersionId;

    /**
     * @var string
     */
    public $objectACL;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $orientation;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $performer;

    /**
     * @var string
     */
    public $produceTime;

    /**
     * @var int
     */
    public $programCount;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string[]
     */
    public $semanticTypes;

    /**
     * @var string
     */
    public $serverSideDataEncryption;

    /**
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @var string
     */
    public $serverSideEncryptionCustomerAlgorithm;

    /**
     * @var string
     */
    public $serverSideEncryptionKeyId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var int
     */
    public $streamCount;

    /**
     * @var SubtitleStream[]
     */
    public $subtitles;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $travelClusterId;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $videoHeight;

    /**
     * @var VideoStream[]
     */
    public $videoStreams;

    /**
     * @var int
     */
    public $videoWidth;
    protected $_name = [
        'accessControlAllowOrigin'              => 'AccessControlAllowOrigin',
        'accessControlRequestMethod'            => 'AccessControlRequestMethod',
        'addresses'                             => 'Addresses',
        'album'                                 => 'Album',
        'albumArtist'                           => 'AlbumArtist',
        'artist'                                => 'Artist',
        'audioCovers'                           => 'AudioCovers',
        'audioStreams'                          => 'AudioStreams',
        'bitrate'                               => 'Bitrate',
        'cacheControl'                          => 'CacheControl',
        'composer'                              => 'Composer',
        'contentDisposition'                    => 'ContentDisposition',
        'contentEncoding'                       => 'ContentEncoding',
        'contentLanguage'                       => 'ContentLanguage',
        'contentMd5'                            => 'ContentMd5',
        'contentType'                           => 'ContentType',
        'createTime'                            => 'CreateTime',
        'croppingSuggestions'                   => 'CroppingSuggestions',
        'customId'                              => 'CustomId',
        'customLabels'                          => 'CustomLabels',
        'datasetName'                           => 'DatasetName',
        'duration'                              => 'Duration',
        'ETag'                                  => 'ETag',
        'EXIF'                                  => 'EXIF',
        'elements'                              => 'Elements',
        'figureCount'                           => 'FigureCount',
        'figures'                               => 'Figures',
        'fileAccessTime'                        => 'FileAccessTime',
        'fileCreateTime'                        => 'FileCreateTime',
        'fileHash'                              => 'FileHash',
        'fileModifiedTime'                      => 'FileModifiedTime',
        'filename'                              => 'Filename',
        'formatLongName'                        => 'FormatLongName',
        'formatName'                            => 'FormatName',
        'imageHeight'                           => 'ImageHeight',
        'imageScore'                            => 'ImageScore',
        'imageWidth'                            => 'ImageWidth',
        'labels'                                => 'Labels',
        'language'                              => 'Language',
        'latLong'                               => 'LatLong',
        'mediaType'                             => 'MediaType',
        'OCRContents'                           => 'OCRContents',
        'OCRTexts'                              => 'OCRTexts',
        'OSSCRC64'                              => 'OSSCRC64',
        'OSSDeleteMarker'                       => 'OSSDeleteMarker',
        'OSSExpiration'                         => 'OSSExpiration',
        'OSSObjectType'                         => 'OSSObjectType',
        'OSSStorageClass'                       => 'OSSStorageClass',
        'OSSTagging'                            => 'OSSTagging',
        'OSSTaggingCount'                       => 'OSSTaggingCount',
        'OSSURI'                                => 'OSSURI',
        'OSSUserMeta'                           => 'OSSUserMeta',
        'OSSVersionId'                          => 'OSSVersionId',
        'objectACL'                             => 'ObjectACL',
        'objectId'                              => 'ObjectId',
        'objectType'                            => 'ObjectType',
        'orientation'                           => 'Orientation',
        'ownerId'                               => 'OwnerId',
        'pageCount'                             => 'PageCount',
        'performer'                             => 'Performer',
        'produceTime'                           => 'ProduceTime',
        'programCount'                          => 'ProgramCount',
        'projectName'                           => 'ProjectName',
        'semanticTypes'                         => 'SemanticTypes',
        'serverSideDataEncryption'              => 'ServerSideDataEncryption',
        'serverSideEncryption'                  => 'ServerSideEncryption',
        'serverSideEncryptionCustomerAlgorithm' => 'ServerSideEncryptionCustomerAlgorithm',
        'serverSideEncryptionKeyId'             => 'ServerSideEncryptionKeyId',
        'size'                                  => 'Size',
        'startTime'                             => 'StartTime',
        'streamCount'                           => 'StreamCount',
        'subtitles'                             => 'Subtitles',
        'timezone'                              => 'Timezone',
        'title'                                 => 'Title',
        'travelClusterId'                       => 'TravelClusterId',
        'URI'                                   => 'URI',
        'updateTime'                            => 'UpdateTime',
        'videoHeight'                           => 'VideoHeight',
        'videoStreams'                          => 'VideoStreams',
        'videoWidth'                            => 'VideoWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlAllowOrigin) {
            $res['AccessControlAllowOrigin'] = $this->accessControlAllowOrigin;
        }
        if (null !== $this->accessControlRequestMethod) {
            $res['AccessControlRequestMethod'] = $this->accessControlRequestMethod;
        }
        if (null !== $this->addresses) {
            $res['Addresses'] = [];
            if (null !== $this->addresses && \is_array($this->addresses)) {
                $n = 0;
                foreach ($this->addresses as $item) {
                    $res['Addresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->album) {
            $res['Album'] = $this->album;
        }
        if (null !== $this->albumArtist) {
            $res['AlbumArtist'] = $this->albumArtist;
        }
        if (null !== $this->artist) {
            $res['Artist'] = $this->artist;
        }
        if (null !== $this->audioCovers) {
            $res['AudioCovers'] = [];
            if (null !== $this->audioCovers && \is_array($this->audioCovers)) {
                $n = 0;
                foreach ($this->audioCovers as $item) {
                    $res['AudioCovers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->audioStreams) {
            $res['AudioStreams'] = [];
            if (null !== $this->audioStreams && \is_array($this->audioStreams)) {
                $n = 0;
                foreach ($this->audioStreams as $item) {
                    $res['AudioStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->cacheControl) {
            $res['CacheControl'] = $this->cacheControl;
        }
        if (null !== $this->composer) {
            $res['Composer'] = $this->composer;
        }
        if (null !== $this->contentDisposition) {
            $res['ContentDisposition'] = $this->contentDisposition;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->contentLanguage) {
            $res['ContentLanguage'] = $this->contentLanguage;
        }
        if (null !== $this->contentMd5) {
            $res['ContentMd5'] = $this->contentMd5;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->croppingSuggestions) {
            $res['CroppingSuggestions'] = [];
            if (null !== $this->croppingSuggestions && \is_array($this->croppingSuggestions)) {
                $n = 0;
                foreach ($this->croppingSuggestions as $item) {
                    $res['CroppingSuggestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->EXIF) {
            $res['EXIF'] = $this->EXIF;
        }
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->figureCount) {
            $res['FigureCount'] = $this->figureCount;
        }
        if (null !== $this->figures) {
            $res['Figures'] = [];
            if (null !== $this->figures && \is_array($this->figures)) {
                $n = 0;
                foreach ($this->figures as $item) {
                    $res['Figures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileAccessTime) {
            $res['FileAccessTime'] = $this->fileAccessTime;
        }
        if (null !== $this->fileCreateTime) {
            $res['FileCreateTime'] = $this->fileCreateTime;
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->fileModifiedTime) {
            $res['FileModifiedTime'] = $this->fileModifiedTime;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->formatLongName) {
            $res['FormatLongName'] = $this->formatLongName;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }
        if (null !== $this->imageScore) {
            $res['ImageScore'] = null !== $this->imageScore ? $this->imageScore->toMap() : null;
        }
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->latLong) {
            $res['LatLong'] = $this->latLong;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->OCRContents) {
            $res['OCRContents'] = [];
            if (null !== $this->OCRContents && \is_array($this->OCRContents)) {
                $n = 0;
                foreach ($this->OCRContents as $item) {
                    $res['OCRContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->OCRTexts) {
            $res['OCRTexts'] = $this->OCRTexts;
        }
        if (null !== $this->OSSCRC64) {
            $res['OSSCRC64'] = $this->OSSCRC64;
        }
        if (null !== $this->OSSDeleteMarker) {
            $res['OSSDeleteMarker'] = $this->OSSDeleteMarker;
        }
        if (null !== $this->OSSExpiration) {
            $res['OSSExpiration'] = $this->OSSExpiration;
        }
        if (null !== $this->OSSObjectType) {
            $res['OSSObjectType'] = $this->OSSObjectType;
        }
        if (null !== $this->OSSStorageClass) {
            $res['OSSStorageClass'] = $this->OSSStorageClass;
        }
        if (null !== $this->OSSTagging) {
            $res['OSSTagging'] = $this->OSSTagging;
        }
        if (null !== $this->OSSTaggingCount) {
            $res['OSSTaggingCount'] = $this->OSSTaggingCount;
        }
        if (null !== $this->OSSURI) {
            $res['OSSURI'] = $this->OSSURI;
        }
        if (null !== $this->OSSUserMeta) {
            $res['OSSUserMeta'] = $this->OSSUserMeta;
        }
        if (null !== $this->OSSVersionId) {
            $res['OSSVersionId'] = $this->OSSVersionId;
        }
        if (null !== $this->objectACL) {
            $res['ObjectACL'] = $this->objectACL;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->orientation) {
            $res['Orientation'] = $this->orientation;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->performer) {
            $res['Performer'] = $this->performer;
        }
        if (null !== $this->produceTime) {
            $res['ProduceTime'] = $this->produceTime;
        }
        if (null !== $this->programCount) {
            $res['ProgramCount'] = $this->programCount;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->semanticTypes) {
            $res['SemanticTypes'] = $this->semanticTypes;
        }
        if (null !== $this->serverSideDataEncryption) {
            $res['ServerSideDataEncryption'] = $this->serverSideDataEncryption;
        }
        if (null !== $this->serverSideEncryption) {
            $res['ServerSideEncryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->serverSideEncryptionCustomerAlgorithm) {
            $res['ServerSideEncryptionCustomerAlgorithm'] = $this->serverSideEncryptionCustomerAlgorithm;
        }
        if (null !== $this->serverSideEncryptionKeyId) {
            $res['ServerSideEncryptionKeyId'] = $this->serverSideEncryptionKeyId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamCount) {
            $res['StreamCount'] = $this->streamCount;
        }
        if (null !== $this->subtitles) {
            $res['Subtitles'] = [];
            if (null !== $this->subtitles && \is_array($this->subtitles)) {
                $n = 0;
                foreach ($this->subtitles as $item) {
                    $res['Subtitles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->travelClusterId) {
            $res['TravelClusterId'] = $this->travelClusterId;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->videoHeight) {
            $res['VideoHeight'] = $this->videoHeight;
        }
        if (null !== $this->videoStreams) {
            $res['VideoStreams'] = [];
            if (null !== $this->videoStreams && \is_array($this->videoStreams)) {
                $n = 0;
                foreach ($this->videoStreams as $item) {
                    $res['VideoStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return File
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlAllowOrigin'])) {
            $model->accessControlAllowOrigin = $map['AccessControlAllowOrigin'];
        }
        if (isset($map['AccessControlRequestMethod'])) {
            $model->accessControlRequestMethod = $map['AccessControlRequestMethod'];
        }
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n                = 0;
                foreach ($map['Addresses'] as $item) {
                    $model->addresses[$n++] = null !== $item ? Address::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Album'])) {
            $model->album = $map['Album'];
        }
        if (isset($map['AlbumArtist'])) {
            $model->albumArtist = $map['AlbumArtist'];
        }
        if (isset($map['Artist'])) {
            $model->artist = $map['Artist'];
        }
        if (isset($map['AudioCovers'])) {
            if (!empty($map['AudioCovers'])) {
                $model->audioCovers = [];
                $n                  = 0;
                foreach ($map['AudioCovers'] as $item) {
                    $model->audioCovers[$n++] = null !== $item ? Image::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AudioStreams'])) {
            if (!empty($map['AudioStreams'])) {
                $model->audioStreams = [];
                $n                   = 0;
                foreach ($map['AudioStreams'] as $item) {
                    $model->audioStreams[$n++] = null !== $item ? AudioStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CacheControl'])) {
            $model->cacheControl = $map['CacheControl'];
        }
        if (isset($map['Composer'])) {
            $model->composer = $map['Composer'];
        }
        if (isset($map['ContentDisposition'])) {
            $model->contentDisposition = $map['ContentDisposition'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['ContentLanguage'])) {
            $model->contentLanguage = $map['ContentLanguage'];
        }
        if (isset($map['ContentMd5'])) {
            $model->contentMd5 = $map['ContentMd5'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CroppingSuggestions'])) {
            if (!empty($map['CroppingSuggestions'])) {
                $model->croppingSuggestions = [];
                $n                          = 0;
                foreach ($map['CroppingSuggestions'] as $item) {
                    $model->croppingSuggestions[$n++] = null !== $item ? CroppingSuggestion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['EXIF'])) {
            $model->EXIF = $map['EXIF'];
        }
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? Element::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FigureCount'])) {
            $model->figureCount = $map['FigureCount'];
        }
        if (isset($map['Figures'])) {
            if (!empty($map['Figures'])) {
                $model->figures = [];
                $n              = 0;
                foreach ($map['Figures'] as $item) {
                    $model->figures[$n++] = null !== $item ? Figure::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileAccessTime'])) {
            $model->fileAccessTime = $map['FileAccessTime'];
        }
        if (isset($map['FileCreateTime'])) {
            $model->fileCreateTime = $map['FileCreateTime'];
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['FileModifiedTime'])) {
            $model->fileModifiedTime = $map['FileModifiedTime'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['FormatLongName'])) {
            $model->formatLongName = $map['FormatLongName'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }
        if (isset($map['ImageScore'])) {
            $model->imageScore = ImageScore::fromMap($map['ImageScore']);
        }
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LatLong'])) {
            $model->latLong = $map['LatLong'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['OCRContents'])) {
            if (!empty($map['OCRContents'])) {
                $model->OCRContents = [];
                $n                  = 0;
                foreach ($map['OCRContents'] as $item) {
                    $model->OCRContents[$n++] = null !== $item ? OCRContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OCRTexts'])) {
            $model->OCRTexts = $map['OCRTexts'];
        }
        if (isset($map['OSSCRC64'])) {
            $model->OSSCRC64 = $map['OSSCRC64'];
        }
        if (isset($map['OSSDeleteMarker'])) {
            $model->OSSDeleteMarker = $map['OSSDeleteMarker'];
        }
        if (isset($map['OSSExpiration'])) {
            $model->OSSExpiration = $map['OSSExpiration'];
        }
        if (isset($map['OSSObjectType'])) {
            $model->OSSObjectType = $map['OSSObjectType'];
        }
        if (isset($map['OSSStorageClass'])) {
            $model->OSSStorageClass = $map['OSSStorageClass'];
        }
        if (isset($map['OSSTagging'])) {
            $model->OSSTagging = $map['OSSTagging'];
        }
        if (isset($map['OSSTaggingCount'])) {
            $model->OSSTaggingCount = $map['OSSTaggingCount'];
        }
        if (isset($map['OSSURI'])) {
            $model->OSSURI = $map['OSSURI'];
        }
        if (isset($map['OSSUserMeta'])) {
            $model->OSSUserMeta = $map['OSSUserMeta'];
        }
        if (isset($map['OSSVersionId'])) {
            $model->OSSVersionId = $map['OSSVersionId'];
        }
        if (isset($map['ObjectACL'])) {
            $model->objectACL = $map['ObjectACL'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Orientation'])) {
            $model->orientation = $map['Orientation'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['Performer'])) {
            $model->performer = $map['Performer'];
        }
        if (isset($map['ProduceTime'])) {
            $model->produceTime = $map['ProduceTime'];
        }
        if (isset($map['ProgramCount'])) {
            $model->programCount = $map['ProgramCount'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SemanticTypes'])) {
            if (!empty($map['SemanticTypes'])) {
                $model->semanticTypes = $map['SemanticTypes'];
            }
        }
        if (isset($map['ServerSideDataEncryption'])) {
            $model->serverSideDataEncryption = $map['ServerSideDataEncryption'];
        }
        if (isset($map['ServerSideEncryption'])) {
            $model->serverSideEncryption = $map['ServerSideEncryption'];
        }
        if (isset($map['ServerSideEncryptionCustomerAlgorithm'])) {
            $model->serverSideEncryptionCustomerAlgorithm = $map['ServerSideEncryptionCustomerAlgorithm'];
        }
        if (isset($map['ServerSideEncryptionKeyId'])) {
            $model->serverSideEncryptionKeyId = $map['ServerSideEncryptionKeyId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamCount'])) {
            $model->streamCount = $map['StreamCount'];
        }
        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n                = 0;
                foreach ($map['Subtitles'] as $item) {
                    $model->subtitles[$n++] = null !== $item ? SubtitleStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TravelClusterId'])) {
            $model->travelClusterId = $map['TravelClusterId'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VideoHeight'])) {
            $model->videoHeight = $map['VideoHeight'];
        }
        if (isset($map['VideoStreams'])) {
            if (!empty($map['VideoStreams'])) {
                $model->videoStreams = [];
                $n                   = 0;
                foreach ($map['VideoStreams'] as $item) {
                    $model->videoStreams[$n++] = null !== $item ? VideoStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }

        return $model;
    }
}
