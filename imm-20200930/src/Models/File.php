<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class File extends Model
{
    /**
     * @description OwnerId
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description ProjectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description DatasetName
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description ObjectType
     *
     * @var string
     */
    public $objectType;

    /**
     * @description ObjectId
     *
     * @var string
     */
    public $objectId;

    /**
     * @description UpdateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description URI
     *
     * @var string
     */
    public $URI;

    /**
     * @description Filename
     *
     * @var string
     */
    public $filename;

    /**
     * @description MediaType
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description ContentType
     *
     * @var string
     */
    public $contentType;

    /**
     * @description Size
     *
     * @var int
     */
    public $size;

    /**
     * @description FileHash
     *
     * @var string
     */
    public $fileHash;

    /**
     * @description FileModifiedTime
     *
     * @var string
     */
    public $fileModifiedTime;

    /**
     * @description FileCreateTime
     *
     * @var string
     */
    public $fileCreateTime;

    /**
     * @description FileAccessTime
     *
     * @var string
     */
    public $fileAccessTime;

    /**
     * @description ProduceTime
     *
     * @var string
     */
    public $produceTime;

    /**
     * @description LatLong
     *
     * @var string
     */
    public $latLong;

    /**
     * @description Timezone
     *
     * @var string
     */
    public $timezone;

    /**
     * @description Addresses
     *
     * @var Address[]
     */
    public $addresses;

    /**
     * @description TravelClusterId
     *
     * @var string
     */
    public $travelClusterId;

    /**
     * @description Orientation
     *
     * @var string
     */
    public $orientation;

    /**
     * @description Faces
     *
     * @var Face[]
     */
    public $faces;

    /**
     * @description FaceCount
     *
     * @var int
     */
    public $faceCount;

    /**
     * @description Labels
     *
     * @var Label[]
     */
    public $labels;

    /**
     * @description Title
     *
     * @var string
     */
    public $title;

    /**
     * @description ImageWidth
     *
     * @var int
     */
    public $imageWidth;

    /**
     * @description ImageHeight
     *
     * @var int
     */
    public $imageHeight;

    /**
     * @description EXIF
     *
     * @var string
     */
    public $EXIF;

    /**
     * @var ImageScore
     */
    public $imageScore;

    /**
     * @description CroppingSuggestions
     *
     * @var CroppingSuggestion[]
     */
    public $croppingSuggestions;

    /**
     * @description OCRContents
     *
     * @var OCRContents[]
     */
    public $OCRContents;

    /**
     * @description ImageEmbeddingsFloat32
     *
     * @var float[]
     */
    public $imageEmbeddingsFloat32;

    /**
     * @description ImageEmbeddingsInt8
     *
     * @var int[]
     */
    public $imageEmbeddingsInt8;

    /**
     * @description VideoWidth
     *
     * @var int
     */
    public $videoWidth;

    /**
     * @description VideoHeight
     *
     * @var int
     */
    public $videoHeight;

    /**
     * @description VideoTakenTime
     *
     * @var string
     */
    public $videoTakenTime;

    /**
     * @description VideoDuration
     *
     * @var float
     */
    public $videoDuration;

    /**
     * @description VideoBitrate
     *
     * @var int
     */
    public $videoBitrate;

    /**
     * @description VideoStartTime
     *
     * @var float
     */
    public $videoStartTime;

    /**
     * @description VideoStreams
     *
     * @var VideoStream[]
     */
    public $videoStreams;

    /**
     * @description Subtitles
     *
     * @var SubtitleStream[]
     */
    public $subtitles;

    /**
     * @description VideoEmbeddingsFloat32
     *
     * @var float[]
     */
    public $videoEmbeddingsFloat32;

    /**
     * @description VideoEmbeddingsInt8
     *
     * @var int[]
     */
    public $videoEmbeddingsInt8;

    /**
     * @description AudioTakenTime
     *
     * @var string
     */
    public $audioTakenTime;

    /**
     * @description AudioDuration
     *
     * @var float
     */
    public $audioDuration;

    /**
     * @description AudioBitrate
     *
     * @var float
     */
    public $audioBitrate;

    /**
     * @description AudioStreams
     *
     * @var AudioStream[]
     */
    public $audioStreams;

    /**
     * @description Artists
     *
     * @var string[]
     */
    public $artists;

    /**
     * @description AudioCovers
     *
     * @var Image[]
     */
    public $audioCovers;

    /**
     * @description Composer
     *
     * @var string
     */
    public $composer;

    /**
     * @description Performer
     *
     * @var string
     */
    public $performer;

    /**
     * @description AudioLanguage
     *
     * @var string
     */
    public $audioLanguage;

    /**
     * @description Album
     *
     * @var string
     */
    public $album;

    /**
     * @description AlbumArtist
     *
     * @var string
     */
    public $albumArtist;

    /**
     * @description AudioEmbeddingsFloat32
     *
     * @var float[]
     */
    public $audioEmbeddingsFloat32;

    /**
     * @description AudioEmbeddingsInt8
     *
     * @var int[]
     */
    public $audioEmbeddingsInt8;

    /**
     * @description DocumentLanguage
     *
     * @var string
     */
    public $documentLanguage;

    /**
     * @description PageCount
     *
     * @var int
     */
    public $pageCount;

    /**
     * @description DocumentContent
     *
     * @var string
     */
    public $documentContent;

    /**
     * @description DocumentEmbeddingsFloat32
     *
     * @var float[]
     */
    public $documentEmbeddingsFloat32;

    /**
     * @description DocumentEmbeddingsInt8
     *
     * @var int[]
     */
    public $documentEmbeddingsInt8;

    /**
     * @description ETag
     *
     * @var string
     */
    public $ETag;

    /**
     * @description CacheControl
     *
     * @var string
     */
    public $cacheControl;

    /**
     * @description ContentDisposition
     *
     * @var string
     */
    public $contentDisposition;

    /**
     * @description ContentEncoding
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description ContentLanguage
     *
     * @var string
     */
    public $contentLanguage;

    /**
     * @description AccessControlAllowOrigin
     *
     * @var string
     */
    public $accessControlAllowOrigin;

    /**
     * @description AccessControlRequestMethod
     *
     * @var string
     */
    public $accessControlRequestMethod;

    /**
     * @description ServerSideEncryptionCustomerAlgorithm
     *
     * @var string
     */
    public $serverSideEncryptionCustomerAlgorithm;

    /**
     * @description ServerSideEncryption
     *
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @description ServerSideDataEncryption
     *
     * @var string
     */
    public $serverSideDataEncryption;

    /**
     * @description ServerSideEncryptionKeyId
     *
     * @var string
     */
    public $serverSideEncryptionKeyId;

    /**
     * @description StorageClass
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description ObjectACL
     *
     * @var string
     */
    public $objectACL;

    /**
     * @description ContentMd5
     *
     * @var string
     */
    public $contentMd5;

    /**
     * @description OSSUserMeta
     *
     * @var mixed[]
     */
    public $OSSUserMeta;

    /**
     * @description OSSTaggingCount
     *
     * @var int
     */
    public $OSSTaggingCount;

    /**
     * @description OSSTagging
     *
     * @var mixed[]
     */
    public $OSSTagging;

    /**
     * @description OSSExpiration
     *
     * @var string
     */
    public $OSSExpiration;

    /**
     * @description OSSVersionId
     *
     * @var string
     */
    public $OSSVersionId;

    /**
     * @description OSSDeleteMarker
     *
     * @var string
     */
    public $OSSDeleteMarker;

    /**
     * @description OSSObjectType
     *
     * @var string
     */
    public $OSSObjectType;

    /**
     * @description CustomId
     *
     * @var string
     */
    public $customId;

    /**
     * @description CustomLabels
     *
     * @var mixed[]
     */
    public $customLabels;
    protected $_name = [
        'ownerId'                               => 'OwnerId',
        'projectName'                           => 'ProjectName',
        'datasetName'                           => 'DatasetName',
        'objectType'                            => 'ObjectType',
        'objectId'                              => 'ObjectId',
        'updateTime'                            => 'UpdateTime',
        'createTime'                            => 'CreateTime',
        'URI'                                   => 'URI',
        'filename'                              => 'Filename',
        'mediaType'                             => 'MediaType',
        'contentType'                           => 'ContentType',
        'size'                                  => 'Size',
        'fileHash'                              => 'FileHash',
        'fileModifiedTime'                      => 'FileModifiedTime',
        'fileCreateTime'                        => 'FileCreateTime',
        'fileAccessTime'                        => 'FileAccessTime',
        'produceTime'                           => 'ProduceTime',
        'latLong'                               => 'LatLong',
        'timezone'                              => 'Timezone',
        'addresses'                             => 'Addresses',
        'travelClusterId'                       => 'TravelClusterId',
        'orientation'                           => 'Orientation',
        'faces'                                 => 'Faces',
        'faceCount'                             => 'FaceCount',
        'labels'                                => 'Labels',
        'title'                                 => 'Title',
        'imageWidth'                            => 'ImageWidth',
        'imageHeight'                           => 'ImageHeight',
        'EXIF'                                  => 'EXIF',
        'imageScore'                            => 'ImageScore',
        'croppingSuggestions'                   => 'CroppingSuggestions',
        'OCRContents'                           => 'OCRContents',
        'imageEmbeddingsFloat32'                => 'ImageEmbeddingsFloat32',
        'imageEmbeddingsInt8'                   => 'ImageEmbeddingsInt8',
        'videoWidth'                            => 'VideoWidth',
        'videoHeight'                           => 'VideoHeight',
        'videoTakenTime'                        => 'VideoTakenTime',
        'videoDuration'                         => 'VideoDuration',
        'videoBitrate'                          => 'VideoBitrate',
        'videoStartTime'                        => 'VideoStartTime',
        'videoStreams'                          => 'VideoStreams',
        'subtitles'                             => 'Subtitles',
        'videoEmbeddingsFloat32'                => 'VideoEmbeddingsFloat32',
        'videoEmbeddingsInt8'                   => 'VideoEmbeddingsInt8',
        'audioTakenTime'                        => 'AudioTakenTime',
        'audioDuration'                         => 'AudioDuration',
        'audioBitrate'                          => 'AudioBitrate',
        'audioStreams'                          => 'AudioStreams',
        'artists'                               => 'Artists',
        'audioCovers'                           => 'AudioCovers',
        'composer'                              => 'Composer',
        'performer'                             => 'Performer',
        'audioLanguage'                         => 'AudioLanguage',
        'album'                                 => 'Album',
        'albumArtist'                           => 'AlbumArtist',
        'audioEmbeddingsFloat32'                => 'AudioEmbeddingsFloat32',
        'audioEmbeddingsInt8'                   => 'AudioEmbeddingsInt8',
        'documentLanguage'                      => 'DocumentLanguage',
        'pageCount'                             => 'PageCount',
        'documentContent'                       => 'DocumentContent',
        'documentEmbeddingsFloat32'             => 'DocumentEmbeddingsFloat32',
        'documentEmbeddingsInt8'                => 'DocumentEmbeddingsInt8',
        'ETag'                                  => 'ETag',
        'cacheControl'                          => 'CacheControl',
        'contentDisposition'                    => 'ContentDisposition',
        'contentEncoding'                       => 'ContentEncoding',
        'contentLanguage'                       => 'ContentLanguage',
        'accessControlAllowOrigin'              => 'AccessControlAllowOrigin',
        'accessControlRequestMethod'            => 'AccessControlRequestMethod',
        'serverSideEncryptionCustomerAlgorithm' => 'ServerSideEncryptionCustomerAlgorithm',
        'serverSideEncryption'                  => 'ServerSideEncryption',
        'serverSideDataEncryption'              => 'ServerSideDataEncryption',
        'serverSideEncryptionKeyId'             => 'ServerSideEncryptionKeyId',
        'storageClass'                          => 'StorageClass',
        'objectACL'                             => 'ObjectACL',
        'contentMd5'                            => 'ContentMd5',
        'OSSUserMeta'                           => 'OSSUserMeta',
        'OSSTaggingCount'                       => 'OSSTaggingCount',
        'OSSTagging'                            => 'OSSTagging',
        'OSSExpiration'                         => 'OSSExpiration',
        'OSSVersionId'                          => 'OSSVersionId',
        'OSSDeleteMarker'                       => 'OSSDeleteMarker',
        'OSSObjectType'                         => 'OSSObjectType',
        'customId'                              => 'CustomId',
        'customLabels'                          => 'CustomLabels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->fileModifiedTime) {
            $res['FileModifiedTime'] = $this->fileModifiedTime;
        }
        if (null !== $this->fileCreateTime) {
            $res['FileCreateTime'] = $this->fileCreateTime;
        }
        if (null !== $this->fileAccessTime) {
            $res['FileAccessTime'] = $this->fileAccessTime;
        }
        if (null !== $this->produceTime) {
            $res['ProduceTime'] = $this->produceTime;
        }
        if (null !== $this->latLong) {
            $res['LatLong'] = $this->latLong;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
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
        if (null !== $this->travelClusterId) {
            $res['TravelClusterId'] = $this->travelClusterId;
        }
        if (null !== $this->orientation) {
            $res['Orientation'] = $this->orientation;
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
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }
        if (null !== $this->EXIF) {
            $res['EXIF'] = $this->EXIF;
        }
        if (null !== $this->imageScore) {
            $res['ImageScore'] = null !== $this->imageScore ? $this->imageScore->toMap() : null;
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
        if (null !== $this->OCRContents) {
            $res['OCRContents'] = [];
            if (null !== $this->OCRContents && \is_array($this->OCRContents)) {
                $n = 0;
                foreach ($this->OCRContents as $item) {
                    $res['OCRContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageEmbeddingsFloat32) {
            $res['ImageEmbeddingsFloat32'] = $this->imageEmbeddingsFloat32;
        }
        if (null !== $this->imageEmbeddingsInt8) {
            $res['ImageEmbeddingsInt8'] = $this->imageEmbeddingsInt8;
        }
        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
        }
        if (null !== $this->videoHeight) {
            $res['VideoHeight'] = $this->videoHeight;
        }
        if (null !== $this->videoTakenTime) {
            $res['VideoTakenTime'] = $this->videoTakenTime;
        }
        if (null !== $this->videoDuration) {
            $res['VideoDuration'] = $this->videoDuration;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->videoStartTime) {
            $res['VideoStartTime'] = $this->videoStartTime;
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
        if (null !== $this->subtitles) {
            $res['Subtitles'] = [];
            if (null !== $this->subtitles && \is_array($this->subtitles)) {
                $n = 0;
                foreach ($this->subtitles as $item) {
                    $res['Subtitles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoEmbeddingsFloat32) {
            $res['VideoEmbeddingsFloat32'] = $this->videoEmbeddingsFloat32;
        }
        if (null !== $this->videoEmbeddingsInt8) {
            $res['VideoEmbeddingsInt8'] = $this->videoEmbeddingsInt8;
        }
        if (null !== $this->audioTakenTime) {
            $res['AudioTakenTime'] = $this->audioTakenTime;
        }
        if (null !== $this->audioDuration) {
            $res['AudioDuration'] = $this->audioDuration;
        }
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
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
        if (null !== $this->artists) {
            $res['Artists'] = $this->artists;
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
        if (null !== $this->composer) {
            $res['Composer'] = $this->composer;
        }
        if (null !== $this->performer) {
            $res['Performer'] = $this->performer;
        }
        if (null !== $this->audioLanguage) {
            $res['AudioLanguage'] = $this->audioLanguage;
        }
        if (null !== $this->album) {
            $res['Album'] = $this->album;
        }
        if (null !== $this->albumArtist) {
            $res['AlbumArtist'] = $this->albumArtist;
        }
        if (null !== $this->audioEmbeddingsFloat32) {
            $res['AudioEmbeddingsFloat32'] = $this->audioEmbeddingsFloat32;
        }
        if (null !== $this->audioEmbeddingsInt8) {
            $res['AudioEmbeddingsInt8'] = $this->audioEmbeddingsInt8;
        }
        if (null !== $this->documentLanguage) {
            $res['DocumentLanguage'] = $this->documentLanguage;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->documentContent) {
            $res['DocumentContent'] = $this->documentContent;
        }
        if (null !== $this->documentEmbeddingsFloat32) {
            $res['DocumentEmbeddingsFloat32'] = $this->documentEmbeddingsFloat32;
        }
        if (null !== $this->documentEmbeddingsInt8) {
            $res['DocumentEmbeddingsInt8'] = $this->documentEmbeddingsInt8;
        }
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->cacheControl) {
            $res['CacheControl'] = $this->cacheControl;
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
        if (null !== $this->accessControlAllowOrigin) {
            $res['AccessControlAllowOrigin'] = $this->accessControlAllowOrigin;
        }
        if (null !== $this->accessControlRequestMethod) {
            $res['AccessControlRequestMethod'] = $this->accessControlRequestMethod;
        }
        if (null !== $this->serverSideEncryptionCustomerAlgorithm) {
            $res['ServerSideEncryptionCustomerAlgorithm'] = $this->serverSideEncryptionCustomerAlgorithm;
        }
        if (null !== $this->serverSideEncryption) {
            $res['ServerSideEncryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->serverSideDataEncryption) {
            $res['ServerSideDataEncryption'] = $this->serverSideDataEncryption;
        }
        if (null !== $this->serverSideEncryptionKeyId) {
            $res['ServerSideEncryptionKeyId'] = $this->serverSideEncryptionKeyId;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->objectACL) {
            $res['ObjectACL'] = $this->objectACL;
        }
        if (null !== $this->contentMd5) {
            $res['ContentMd5'] = $this->contentMd5;
        }
        if (null !== $this->OSSUserMeta) {
            $res['OSSUserMeta'] = $this->OSSUserMeta;
        }
        if (null !== $this->OSSTaggingCount) {
            $res['OSSTaggingCount'] = $this->OSSTaggingCount;
        }
        if (null !== $this->OSSTagging) {
            $res['OSSTagging'] = $this->OSSTagging;
        }
        if (null !== $this->OSSExpiration) {
            $res['OSSExpiration'] = $this->OSSExpiration;
        }
        if (null !== $this->OSSVersionId) {
            $res['OSSVersionId'] = $this->OSSVersionId;
        }
        if (null !== $this->OSSDeleteMarker) {
            $res['OSSDeleteMarker'] = $this->OSSDeleteMarker;
        }
        if (null !== $this->OSSObjectType) {
            $res['OSSObjectType'] = $this->OSSObjectType;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['FileModifiedTime'])) {
            $model->fileModifiedTime = $map['FileModifiedTime'];
        }
        if (isset($map['FileCreateTime'])) {
            $model->fileCreateTime = $map['FileCreateTime'];
        }
        if (isset($map['FileAccessTime'])) {
            $model->fileAccessTime = $map['FileAccessTime'];
        }
        if (isset($map['ProduceTime'])) {
            $model->produceTime = $map['ProduceTime'];
        }
        if (isset($map['LatLong'])) {
            $model->latLong = $map['LatLong'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
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
        if (isset($map['TravelClusterId'])) {
            $model->travelClusterId = $map['TravelClusterId'];
        }
        if (isset($map['Orientation'])) {
            $model->orientation = $map['Orientation'];
        }
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? Face::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }
        if (isset($map['EXIF'])) {
            $model->EXIF = $map['EXIF'];
        }
        if (isset($map['ImageScore'])) {
            $model->imageScore = ImageScore::fromMap($map['ImageScore']);
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
        if (isset($map['OCRContents'])) {
            if (!empty($map['OCRContents'])) {
                $model->OCRContents = [];
                $n                  = 0;
                foreach ($map['OCRContents'] as $item) {
                    $model->OCRContents[$n++] = null !== $item ? OCRContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageEmbeddingsFloat32'])) {
            if (!empty($map['ImageEmbeddingsFloat32'])) {
                $model->imageEmbeddingsFloat32 = $map['ImageEmbeddingsFloat32'];
            }
        }
        if (isset($map['ImageEmbeddingsInt8'])) {
            if (!empty($map['ImageEmbeddingsInt8'])) {
                $model->imageEmbeddingsInt8 = $map['ImageEmbeddingsInt8'];
            }
        }
        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }
        if (isset($map['VideoHeight'])) {
            $model->videoHeight = $map['VideoHeight'];
        }
        if (isset($map['VideoTakenTime'])) {
            $model->videoTakenTime = $map['VideoTakenTime'];
        }
        if (isset($map['VideoDuration'])) {
            $model->videoDuration = $map['VideoDuration'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['VideoStartTime'])) {
            $model->videoStartTime = $map['VideoStartTime'];
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
        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n                = 0;
                foreach ($map['Subtitles'] as $item) {
                    $model->subtitles[$n++] = null !== $item ? SubtitleStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoEmbeddingsFloat32'])) {
            if (!empty($map['VideoEmbeddingsFloat32'])) {
                $model->videoEmbeddingsFloat32 = $map['VideoEmbeddingsFloat32'];
            }
        }
        if (isset($map['VideoEmbeddingsInt8'])) {
            if (!empty($map['VideoEmbeddingsInt8'])) {
                $model->videoEmbeddingsInt8 = $map['VideoEmbeddingsInt8'];
            }
        }
        if (isset($map['AudioTakenTime'])) {
            $model->audioTakenTime = $map['AudioTakenTime'];
        }
        if (isset($map['AudioDuration'])) {
            $model->audioDuration = $map['AudioDuration'];
        }
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
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
        if (isset($map['Artists'])) {
            if (!empty($map['Artists'])) {
                $model->artists = $map['Artists'];
            }
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
        if (isset($map['Composer'])) {
            $model->composer = $map['Composer'];
        }
        if (isset($map['Performer'])) {
            $model->performer = $map['Performer'];
        }
        if (isset($map['AudioLanguage'])) {
            $model->audioLanguage = $map['AudioLanguage'];
        }
        if (isset($map['Album'])) {
            $model->album = $map['Album'];
        }
        if (isset($map['AlbumArtist'])) {
            $model->albumArtist = $map['AlbumArtist'];
        }
        if (isset($map['AudioEmbeddingsFloat32'])) {
            if (!empty($map['AudioEmbeddingsFloat32'])) {
                $model->audioEmbeddingsFloat32 = $map['AudioEmbeddingsFloat32'];
            }
        }
        if (isset($map['AudioEmbeddingsInt8'])) {
            if (!empty($map['AudioEmbeddingsInt8'])) {
                $model->audioEmbeddingsInt8 = $map['AudioEmbeddingsInt8'];
            }
        }
        if (isset($map['DocumentLanguage'])) {
            $model->documentLanguage = $map['DocumentLanguage'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['DocumentContent'])) {
            $model->documentContent = $map['DocumentContent'];
        }
        if (isset($map['DocumentEmbeddingsFloat32'])) {
            if (!empty($map['DocumentEmbeddingsFloat32'])) {
                $model->documentEmbeddingsFloat32 = $map['DocumentEmbeddingsFloat32'];
            }
        }
        if (isset($map['DocumentEmbeddingsInt8'])) {
            if (!empty($map['DocumentEmbeddingsInt8'])) {
                $model->documentEmbeddingsInt8 = $map['DocumentEmbeddingsInt8'];
            }
        }
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['CacheControl'])) {
            $model->cacheControl = $map['CacheControl'];
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
        if (isset($map['AccessControlAllowOrigin'])) {
            $model->accessControlAllowOrigin = $map['AccessControlAllowOrigin'];
        }
        if (isset($map['AccessControlRequestMethod'])) {
            $model->accessControlRequestMethod = $map['AccessControlRequestMethod'];
        }
        if (isset($map['ServerSideEncryptionCustomerAlgorithm'])) {
            $model->serverSideEncryptionCustomerAlgorithm = $map['ServerSideEncryptionCustomerAlgorithm'];
        }
        if (isset($map['ServerSideEncryption'])) {
            $model->serverSideEncryption = $map['ServerSideEncryption'];
        }
        if (isset($map['ServerSideDataEncryption'])) {
            $model->serverSideDataEncryption = $map['ServerSideDataEncryption'];
        }
        if (isset($map['ServerSideEncryptionKeyId'])) {
            $model->serverSideEncryptionKeyId = $map['ServerSideEncryptionKeyId'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['ObjectACL'])) {
            $model->objectACL = $map['ObjectACL'];
        }
        if (isset($map['ContentMd5'])) {
            $model->contentMd5 = $map['ContentMd5'];
        }
        if (isset($map['OSSUserMeta'])) {
            $model->OSSUserMeta = $map['OSSUserMeta'];
        }
        if (isset($map['OSSTaggingCount'])) {
            $model->OSSTaggingCount = $map['OSSTaggingCount'];
        }
        if (isset($map['OSSTagging'])) {
            $model->OSSTagging = $map['OSSTagging'];
        }
        if (isset($map['OSSExpiration'])) {
            $model->OSSExpiration = $map['OSSExpiration'];
        }
        if (isset($map['OSSVersionId'])) {
            $model->OSSVersionId = $map['OSSVersionId'];
        }
        if (isset($map['OSSDeleteMarker'])) {
            $model->OSSDeleteMarker = $map['OSSDeleteMarker'];
        }
        if (isset($map['OSSObjectType'])) {
            $model->OSSObjectType = $map['OSSObjectType'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }

        return $model;
    }
}
