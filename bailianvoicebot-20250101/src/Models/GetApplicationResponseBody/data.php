<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\draftVersion;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion;

class data extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var draftVersion
     */
    public $draftVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nluAccessType;

    /**
     * @var string
     */
    public $nluEngine;

    /**
     * @var publishedVersion
     */
    public $publishedVersion;

    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'concurrency' => 'Concurrency',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'draftVersion' => 'DraftVersion',
        'name' => 'Name',
        'nluAccessType' => 'NluAccessType',
        'nluEngine' => 'NluEngine',
        'publishedVersion' => 'PublishedVersion',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        if (null !== $this->draftVersion) {
            $this->draftVersion->validate();
        }
        if (null !== $this->publishedVersion) {
            $this->publishedVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->draftVersion) {
            $res['DraftVersion'] = null !== $this->draftVersion ? $this->draftVersion->toArray($noStream) : $this->draftVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nluAccessType) {
            $res['NluAccessType'] = $this->nluAccessType;
        }

        if (null !== $this->nluEngine) {
            $res['NluEngine'] = $this->nluEngine;
        }

        if (null !== $this->publishedVersion) {
            $res['PublishedVersion'] = null !== $this->publishedVersion ? $this->publishedVersion->toArray($noStream) : $this->publishedVersion;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DraftVersion'])) {
            $model->draftVersion = draftVersion::fromMap($map['DraftVersion']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NluAccessType'])) {
            $model->nluAccessType = $map['NluAccessType'];
        }

        if (isset($map['NluEngine'])) {
            $model->nluEngine = $map['NluEngine'];
        }

        if (isset($map['PublishedVersion'])) {
            $model->publishedVersion = publishedVersion::fromMap($map['PublishedVersion']);
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
