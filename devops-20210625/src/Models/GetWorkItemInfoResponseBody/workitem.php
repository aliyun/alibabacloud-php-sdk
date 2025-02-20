<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\customFields;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\tagDetails;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\versions;

class workitem extends Model
{
    /**
     * @var string
     */
    public $assignedTo;
    /**
     * @var string
     */
    public $categoryIdentifier;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var customFields[]
     */
    public $customFields;
    /**
     * @var string
     */
    public $document;
    /**
     * @var string
     */
    public $documentFormat;
    /**
     * @var int
     */
    public $finishTime;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var int
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $logicalStatus;
    /**
     * @var string
     */
    public $modifier;
    /**
     * @var string
     */
    public $parentIdentifier;
    /**
     * @var string[]
     */
    public $participant;
    /**
     * @var string
     */
    public $serialNumber;
    /**
     * @var string
     */
    public $spaceIdentifier;
    /**
     * @var string
     */
    public $spaceName;
    /**
     * @var string
     */
    public $spaceType;
    /**
     * @var string[]
     */
    public $sprint;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusIdentifier;
    /**
     * @var string
     */
    public $statusStageIdentifier;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string[]
     */
    public $tag;
    /**
     * @var tagDetails[]
     */
    public $tagDetails;
    /**
     * @var string[]
     */
    public $tracker;
    /**
     * @var int
     */
    public $updateStatusAt;
    /**
     * @var string[]
     */
    public $verifier;
    /**
     * @var versions[]
     */
    public $versions;
    /**
     * @var string
     */
    public $workitemTypeIdentifier;
    protected $_name = [
        'assignedTo'             => 'assignedTo',
        'categoryIdentifier'     => 'categoryIdentifier',
        'creator'                => 'creator',
        'customFields'           => 'customFields',
        'document'               => 'document',
        'documentFormat'         => 'documentFormat',
        'finishTime'             => 'finishTime',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'identifier'             => 'identifier',
        'logicalStatus'          => 'logicalStatus',
        'modifier'               => 'modifier',
        'parentIdentifier'       => 'parentIdentifier',
        'participant'            => 'participant',
        'serialNumber'           => 'serialNumber',
        'spaceIdentifier'        => 'spaceIdentifier',
        'spaceName'              => 'spaceName',
        'spaceType'              => 'spaceType',
        'sprint'                 => 'sprint',
        'status'                 => 'status',
        'statusIdentifier'       => 'statusIdentifier',
        'statusStageIdentifier'  => 'statusStageIdentifier',
        'subject'                => 'subject',
        'tag'                    => 'tag',
        'tagDetails'             => 'tagDetails',
        'tracker'                => 'tracker',
        'updateStatusAt'         => 'updateStatusAt',
        'verifier'               => 'verifier',
        'versions'               => 'versions',
        'workitemTypeIdentifier' => 'workitemTypeIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        if (\is_array($this->participant)) {
            Model::validateArray($this->participant);
        }
        if (\is_array($this->sprint)) {
            Model::validateArray($this->sprint);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->tagDetails)) {
            Model::validateArray($this->tagDetails);
        }
        if (\is_array($this->tracker)) {
            Model::validateArray($this->tracker);
        }
        if (\is_array($this->verifier)) {
            Model::validateArray($this->verifier);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = $this->assignedTo;
        }

        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['customFields'] = [];
                $n1                  = 0;
                foreach ($this->customFields as $item1) {
                    $res['customFields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->documentFormat) {
            $res['documentFormat'] = $this->documentFormat;
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->logicalStatus) {
            $res['logicalStatus'] = $this->logicalStatus;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->parentIdentifier) {
            $res['parentIdentifier'] = $this->parentIdentifier;
        }

        if (null !== $this->participant) {
            if (\is_array($this->participant)) {
                $res['participant'] = [];
                $n1                 = 0;
                foreach ($this->participant as $item1) {
                    $res['participant'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->serialNumber) {
            $res['serialNumber'] = $this->serialNumber;
        }

        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        if (null !== $this->spaceName) {
            $res['spaceName'] = $this->spaceName;
        }

        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }

        if (null !== $this->sprint) {
            if (\is_array($this->sprint)) {
                $res['sprint'] = [];
                $n1            = 0;
                foreach ($this->sprint as $item1) {
                    $res['sprint'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusIdentifier) {
            $res['statusIdentifier'] = $this->statusIdentifier;
        }

        if (null !== $this->statusStageIdentifier) {
            $res['statusStageIdentifier'] = $this->statusStageIdentifier;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['tag'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tagDetails) {
            if (\is_array($this->tagDetails)) {
                $res['tagDetails'] = [];
                $n1                = 0;
                foreach ($this->tagDetails as $item1) {
                    $res['tagDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tracker) {
            if (\is_array($this->tracker)) {
                $res['tracker'] = [];
                $n1             = 0;
                foreach ($this->tracker as $item1) {
                    $res['tracker'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->updateStatusAt) {
            $res['updateStatusAt'] = $this->updateStatusAt;
        }

        if (null !== $this->verifier) {
            if (\is_array($this->verifier)) {
                $res['verifier'] = [];
                $n1              = 0;
                foreach ($this->verifier as $item1) {
                    $res['verifier'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1              = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workitemTypeIdentifier) {
            $res['workitemTypeIdentifier'] = $this->workitemTypeIdentifier;
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
        if (isset($map['assignedTo'])) {
            $model->assignedTo = $map['assignedTo'];
        }

        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n1                  = 0;
                foreach ($map['customFields'] as $item1) {
                    $model->customFields[$n1++] = customFields::fromMap($item1);
                }
            }
        }

        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['documentFormat'])) {
            $model->documentFormat = $map['documentFormat'];
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['logicalStatus'])) {
            $model->logicalStatus = $map['logicalStatus'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['parentIdentifier'])) {
            $model->parentIdentifier = $map['parentIdentifier'];
        }

        if (isset($map['participant'])) {
            if (!empty($map['participant'])) {
                $model->participant = [];
                $n1                 = 0;
                foreach ($map['participant'] as $item1) {
                    $model->participant[$n1++] = $item1;
                }
            }
        }

        if (isset($map['serialNumber'])) {
            $model->serialNumber = $map['serialNumber'];
        }

        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        if (isset($map['spaceName'])) {
            $model->spaceName = $map['spaceName'];
        }

        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }

        if (isset($map['sprint'])) {
            if (!empty($map['sprint'])) {
                $model->sprint = [];
                $n1            = 0;
                foreach ($map['sprint'] as $item1) {
                    $model->sprint[$n1++] = $item1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusIdentifier'])) {
            $model->statusIdentifier = $map['statusIdentifier'];
        }

        if (isset($map['statusStageIdentifier'])) {
            $model->statusStageIdentifier = $map['statusStageIdentifier'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['tag'] as $item1) {
                    $model->tag[$n1++] = $item1;
                }
            }
        }

        if (isset($map['tagDetails'])) {
            if (!empty($map['tagDetails'])) {
                $model->tagDetails = [];
                $n1                = 0;
                foreach ($map['tagDetails'] as $item1) {
                    $model->tagDetails[$n1++] = tagDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['tracker'])) {
            if (!empty($map['tracker'])) {
                $model->tracker = [];
                $n1             = 0;
                foreach ($map['tracker'] as $item1) {
                    $model->tracker[$n1++] = $item1;
                }
            }
        }

        if (isset($map['updateStatusAt'])) {
            $model->updateStatusAt = $map['updateStatusAt'];
        }

        if (isset($map['verifier'])) {
            if (!empty($map['verifier'])) {
                $model->verifier = [];
                $n1              = 0;
                foreach ($map['verifier'] as $item1) {
                    $model->verifier[$n1++] = $item1;
                }
            }
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1              = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1++] = versions::fromMap($item1);
                }
            }
        }

        if (isset($map['workitemTypeIdentifier'])) {
            $model->workitemTypeIdentifier = $map['workitemTypeIdentifier'];
        }

        return $model;
    }
}
